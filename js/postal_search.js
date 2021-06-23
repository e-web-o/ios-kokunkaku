/* vim:set ts=2 sw=2 sts=2 ai si nu et ft=javascript ff=dos:
 *
 * Last Change: 07-September-2009 10:12:59.
 * Author: Technical team.
 * Copyright: (C)Anchor Group K.K.
 *
 * URL: http://www.anchor-gr.jp/
 * EMAIL: labo@anchor-gr.jp
 *
 * Filename: postal_search.js
 * Encoding: UTF-8
 *
 * */

document.write(unescape('%3Cscript type="text/javascript" src="' + (document.location.protocol=="https:" ? "https:" : "http:") + '//www.anchor-gr.jp/s/POSTAL/js"%3E%3C/sc' + 'ript%3E'));

var function_postal = function()
{

  if(typeof zipcodeID == 'undefined') {

    /* 郵便番号入力テキストボックスのIDを指定 */
    var zipcodeID = 'ID_CODE';
    var loadingID = 'ID_LOADING';

    POSTAL_encoding = "utf-8";
    POSTAL_callback = "displayOut";
    POSTAL_alert = '郵便番号が間違っています。';


    POSTAL_zipcodeObj = document.getElementById(zipcodeID);
    POSTAL_loadingObj = document.getElementById(loadingID);
    POSTAL_loadingObj.style.display = 'none';

  }

}

function displayOut(postal)
{

  var textboxID = [
    "ID_ADDR1", "ID_ADDR2", "ID_ADDR3", 
    "ID_ADDR12", "ID_ADDR23", "ID_ADDR123",
    "ID_ADDR1001", "ID_ADDR1002", "ID_ADDR1003", 
    "ID_ADDR1012", "ID_ADDR1023", "ID_ADDR1123"
  ];

  var alert_flag = false;

  for(var i in textboxID){
    var obj = document.getElementById(textboxID[i]);

    if(obj){
      var num = Number(textboxID[i].replace(/^ID_ADDR/, ""));

      switch(num){
      case 1:
        if(obj.type == "select-one") {
          alert_flag = true;
          for(var idx=0; idx<obj.length; idx++){
            if(obj.options[idx].text == postal.addr1){
              obj.selectedIndex = idx; alert_flag = false;
              break;
            }
          }
        }else{
          obj.value = postal.addr1;
        }
        break;
      case 2:
        obj.value = postal.addr2;
        break;
      case 3:
        obj.value = postal.addr3;
        break;
      case 12:
        obj.value = postal.addr1 + postal.addr2;
        break;
      case 23:
        obj.value = postal.addr2 + postal.addr3;
        break;
      case 123:
        obj.value = postal.addr1 + postal.addr2 + postal.addr3;
        break;
      case 1001:
        obj.value = postal.addr1_kana;
        break;
      case 1002:
        obj.value = postal.addr2_kana;
        break;
      case 1003:
        obj.value = postal.addr3_kana;
        break;
      case 1012:
        obj.value = postal.addr1_kana + postal.addr2_kana;
        break;
      case 1023:
        obj.value = postal.addr2_kana + postal.addr3_kana;
        break;
      case 1123:
        obj.value = postal.addr1_kana + postal.addr2_kana + postal.addr3_kana;
        break;
      default:
        alert_flag = true;
        break;
      }

    }
  }

  if(alert_flag) alert(POSTAL_alert);
  POSTAL_loadingObj.style.display = 'none';

}

function key(e){
  var code;

  if(document.all) {
    code = e.keyCode;
  }else if(document.getElementById) {
    code = (e.keyCode) ? e.keyCode : e.charCode;
  }else if(document.layers) {
    code = e.which;
  }

  return (code ? String.fromCharCode(code) : null);
}

function searchPOSTALex(e)
{
  if(key(e||window.event).match(/^\d$/)) {
    if(POSTAL_zipcodeObj.value.match(/^\d\d\d\-?\d\d\d\d$/)) {
      searchPOSTAL();
    }
  }
}

function window_onload(f) {

  if(window.addEventListener) {
    window.addEventListener("load", f, false);
  }else if (window.attachEvent) {
    window.attachEvent("onload", f);
  }else{
    window.onload = f;
  }

}

window_onload(function_postal);

