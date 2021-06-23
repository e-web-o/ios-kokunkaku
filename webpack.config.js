module.exports = {
    mode: "production",

    entry: {
        // index: './src/js/index.js',
        dinner: './src/js/dinner.js',
        spa: './src/js/spa.js',
        room: './src/js/room.js',
        sightseeing: './src/js/sightseeing.js',
        facility: './src/js/facility.js',
        faq: './src/js/faq.js',
        pet: './src/js/pet.js',
        access: './src/js/access.js',
        celebration: './src/js/celebration.js',
        privacypolicy: './src/js/privacypolicy.js',
        yugoromo: './src/js/yugoromo.js',
        worcation: './src/js/worcation.js'
    },
    output: {
        filename: './[name].js'
    }
}