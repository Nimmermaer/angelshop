module.tx_angelshop_productlist {
    view {
        # cat=module.tx_themewhite_customizer/file; type=string; label=Path to template root (BE)
        templateRootPath = EXT:angelshop/Resources/Private/Backend/Templates/
        # cat=module.tx_themewhite_customizer/file; type=string; label=Path to template partials (BE)
        partialRootPath = EXT:angelshop/Resources/Private/Backend/Partials/
        # cat=module.tx_themewhite_customizer/file; type=string; label=Path to template layouts (BE)
        layoutRootPath = EXT:angelshop/Resources/Private/Backend/Layouts/
    }
    persistence {
        # cat=module.tx_themewhite_customizer//a; type=string; label=Default storage PID
        storagePid =
    }
}
