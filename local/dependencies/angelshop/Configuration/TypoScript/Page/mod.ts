mod {
    SHARED {
        defaultLanguageFlag = de
        defaultLanguageLabel = Deutsch
    }
}


mod.web_list {
    listOnlyInSingleTableView = 1
}


mod.web_func.menu.function {
    TYPO3\CMS\WizardSortpages\View\SortPagesWizardModuleFunction = 0
}


setup {
    startModule = web_layout
    default {
        emailMeAtLogin = 1
    }

    fields {

        avatar.disabled = 1
    }
}



