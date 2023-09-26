export default {
    data() {
        return {};
    },
    methods: {
        changeRoute(route) {
            this.$router.push(route);
        },
        getMedia: function (id) {
            return window.location.origin + "/api/displayFile/" + id;
        },
    },
};
