class AutoRedirection {

    let delay;

    function timer(path, timing) {
        this.delay = document.setTimeout(this.redirection(path), timing);
    }

    function redirection(link) {
        // Faire la redirection ici
        document.location.href='.link.';
    }
}
