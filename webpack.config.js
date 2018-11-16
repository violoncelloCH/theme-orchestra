module.exports = [

    {
        entry: {
            "node-theme": "./app/components/node-theme.vue",
            "widget-theme": "./app/components/widget-theme.vue",
            "site-theme": "./app/components/site-theme.vue"
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        module: {
            loaders: [
                { test: /\.vue$/, loader: "vue" }
            ]
        }
    }

];
