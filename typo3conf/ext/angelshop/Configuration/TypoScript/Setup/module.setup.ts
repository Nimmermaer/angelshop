# Module configuration
module.tx_angelshop_web_angelshopproductlist{
    persistence {
        storagePid = {$module.tx_angelshop_productlist.persistence.storagePid}
    }
    view {
        templateRootPaths.0 = {$module.tx_angelshop_productlist.view.templateRootPath}
        partialRootPaths.0 = {$module.tx_angelshop_productlist.view.partialRootPath}
        layoutRootPaths.0 = {$module.tx_angelshop_productlist.view.layoutRootPath}
    }
}
