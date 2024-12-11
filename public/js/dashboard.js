class PopupBase {
    constructor(closeSelectors, hiddenClass = "hidden", blockClass = "block") {
        this.closePop = document.querySelectorAll(closeSelectors);
        this.hiddenClass = hiddenClass;
        this.blockClass = blockClass;
    }

    open(element , id) {
        if (element.classList.contains(this.hiddenClass)) {
            element.classList.replace(this.hiddenClass, this.blockClass);
            //Mengirim Data ke back End
            this.closePop.forEach((value) => {
                value.value = id
                console.log(value.value)
            })
        }
    }

    close(element) {
        if (element.classList.contains(this.blockClass)) {
            element.classList.replace(this.blockClass, this.hiddenClass);
        }
    }

    initCloseListeners() {
        this.closePop.forEach((closeButton) => {
            closeButton.addEventListener("click", () => {
                this.closeAll();
            });
        });
    }
}

class PopupData extends PopupBase {
    constructor(
        triggerDelete,
        buttonDelete,
        closeSelectors,
        triggerEdit,
        formEdit
    ) {
        super(closeSelectors);
        this.triggerDelete = document.querySelectorAll(triggerDelete);
        this.buttonDelete = document.querySelector(buttonDelete);
        this.triggerEdit = document.querySelectorAll(triggerEdit);
        this.formEdit = document.querySelector(formEdit);
        
        this.init();
    }

    init() {
        this.triggerDelete.forEach((TriggerDelete) => {
            TriggerDelete.addEventListener("click", () =>
                this.open(this.buttonDelete , TriggerDelete.value)
            );
        });
        this.triggerEdit.forEach((editTrigger) => {
            editTrigger.addEventListener("click", () =>
                this.open(this.formEdit , editTrigger.value)
            );
        });
        this.initCloseListeners();
    }

    closeAll() {
        this.close(this.buttonDelete);
        this.close(this.formEdit);
    }
}

class PopuPArtikel extends PopupBase {
    constructor(
        triggerAddAr,
        target,
        closeSelectors,
        triggerEdit,
        h2,
        triggerDelete,
        buttonDelete
    ) {
        super(closeSelectors);
        this.triggerAddAr = document.querySelector(triggerAddAr);
        this.target = document.querySelector(target);
        this.triggerEdit = document.querySelectorAll(triggerEdit);
        this.formh2 = document.querySelector(h2);
        this.triggerDelete = document.querySelectorAll(triggerDelete);
        this.buttonDelete = document.querySelector(buttonDelete);

        this.init();
    }

    init() {
        this.triggerAddAr.addEventListener("click", () =>
            this.open(this.target)
        );
        this.triggerEdit.forEach((editTrigger) => {
            editTrigger.addEventListener("click", () => {
                this.open(this.target);
                this.formh2.innerText = "Edit Artikel";
            });
        });
        this.triggerDelete.forEach((deleteTrigger) => {
            deleteTrigger.addEventListener("click", () =>
                this.open(this.buttonDelete)
            );
        });
        this.initCloseListeners();
    }

    closeAll() {
        this.close(this.target);
        this.close(this.buttonDelete);
        this.formh2.innerText = "Tambah Artikel";
    }
}

class PopUpNotif extends PopupBase {
    constructor(
        triggerAccept,
        buttonAccept,
        closeSelector,
        triggerDenied,
        buttonDenied,
        triggerSee,
        formDetail
    ) {
        super(closeSelector);
        this.triggerAccept = document.querySelectorAll(triggerAccept);
        this.buttonAccept = document.querySelector(buttonAccept);
        this.triggerDenied = document.querySelectorAll(triggerDenied);
        this.buttonDenied = document.querySelector(buttonDenied);
        this.triggerSee = document.querySelectorAll(triggerSee);
        this.formDetail = document.querySelector(formDetail);

        this.init();
    }

    init() {
        this.triggerAccept.forEach((triggerAccept) => {
            triggerAccept.addEventListener("click", () => {
                this.open(this.buttonAccept);
            });
        });

        this.triggerDenied.forEach((triggerDenied) => {
            triggerDenied.addEventListener("click", () => {
                this.open(this.buttonDenied);
            });
        });

        this.triggerSee.forEach((triggerSee) => {
            triggerSee.addEventListener("click", () => {
                this.open(this.formDetail);
            });
        });

        this.initCloseListeners();
    }

    closeAll() {
        this.close(this.buttonAccept);
        this.close(this.buttonDenied);
        this.close(this.formDetail);
    }
}

//Logout
class Logout extends PopupBase {
    constructor(trigger, target, closeSelector) {
        super(closeSelector);
        this.trigger = document.querySelector(trigger);
        this.target = document.querySelector(target);
        this.init();
    }

    init() {
        this.trigger.addEventListener("click", () => {
            this.open(this.target);
        });

        this.initCloseListeners();
    }

    closeAll() {
        this.close(this.target);
    }
}

const logout = new Logout(".trigger-logout", ".button-logout", ".close-popup");

if (document.querySelector("#dashboardData")) {
    const popupData = new PopupData(
        ".trigger-delete",
        ".button-delete",
        ".close-popup",
        ".trigger-edit",
        ".form-edit"
    );
}
if (document.querySelector("#dashboardArtikel")) {
    const popupArtikel = new PopuPArtikel(
        ".add-artikel",
        ".formArtikel",
        ".close-popup",
        ".trigger-edit",
        ".formh2",
        ".trigger-delete",
        ".button-delete"
    );
}

const popupNotif = new PopUpNotif(
    ".trigger-accept",
    ".button-accept",
    ".close-popup",
    ".trigger-denied",
    ".button-denied",
    ".trigger-see",
    ".formDetail"
);
