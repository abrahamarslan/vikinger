module.exports = {
    methods: {
        assets(path) {
            var base_path = window._asset || '';
            return base_path + path;
        }
    }
}
