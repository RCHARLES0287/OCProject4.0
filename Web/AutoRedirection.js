class AutoRedirection {

    // let link

    constructor(link, duration) {
        this.link = link;
        window.setTimeout(this.redirection.bind(this), duration);
    }

    redirection() {
        // Faire la redirection ici
        document.location.href=this.link;
    }
}
