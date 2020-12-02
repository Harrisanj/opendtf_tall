import Spruce from "@ryangjchandler/spruce";

class ModalAuth {

    constructor() {
        this.init();
    }

    init() {
        Spruce.store('modalAuth', {
            open: false,
            mode: 1
        });
    }

}

export default ModalAuth;
