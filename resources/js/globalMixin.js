export const globalMixin = {
    methods: {
        imageLoadError (event) {
            event.target.src = "images/404.svg"
        }
    }
}