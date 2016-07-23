lib.fluidContent {
    templateName = Angelshop
    templateRootPaths {
        1 = EXT:angelshop/Resources/Private/Contentelements/Templates
    }

    partialRootPaths {
        1 = EXT:angelshop/Resources/Private/Contentelements/Partials/
    }

    layoutRootPaths {
        1 = EXT:angelshop/Resources/Private/Contentelements/Layouts/
    }

    settings {
        defaultHeaderType = {$styles.content.defaultHeaderType}
        offerPid = {$global.page.offerPid}
    }
}

tt_content {
    tx_slider < lib.fluidContent
    tx_slider {
        templateName = Angelshop/Slider
        dataProcessing {
            10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            10 {
                references.fieldName = image
            }
        }
    }

    header {
        templateName = Angelshop/Header
    }

    ce_product  < lib.fluidContent
    ce_product {
        templateName = Angelshop/Product
        dataProcessing {
            10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            10 {
                references.fieldName = image
            }
        }
    }

    textmedia {
        dataProcessing {
            100 = MB\Angelshop\DataProcessing\ContentElementProcessor
            100 {
                references.fieldName = tx_angelshop_domain_model_fontawesome
            }
        }
    }

    tx_trader_slider < lib.fluidContent
    tx_trader_slider {
        templateName = TraderSlider
        dataProcessing {
            100 = MB\Angelshop\DataProcessing\ContentElementProcessor
            100 {
                references.fieldName = tx_angelshop_domain_model_trader
            }
        }
    }

    tx_gallery < lib.fluidContent
    tx_gallery {
        templateName = Angelshop/Gallery
        dataProcessing {
            100 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            100 {
                references.fieldName = image
            }
        }
    }

    tx_teaser < lib.fluidContent
    tx_teaser {
        templateName = Angelshop/Teaser
        dataProcessing {
            10 = MB\Angelshop\DataProcessing\ContentElementProcessor
            10 {
                references.fieldName = assets
            }
        }
    }

    tx_service < lib.fluidContent
    tx_service {
        templateName = Angelshop/Service
        dataProcessing {
            10 = MB\Angelshop\DataProcessing\ContentElementProcessor
            10 {
                references.fieldName = assets
            }
        }
    }

    tx_tab < lib.fluidContent
    tx_tab {
        templateName = Tabs
        dataProcessing {
            100 = MB\Angelshop\DataProcessing\ContentElementProcessor
            100 {
                references.fieldName = tx_angelshop_domain_model_tab
            }
        }
    }

    tx_serviceList < lib.fluidContent
    tx_serviceList {
        templateName = Angelshop/ServiceList
        dataProcessing {
            10 = MB\Angelshop\DataProcessing\ContentElementProcessor
            10 {
                references.fieldName = assets
            }
        }
    }

    tx_impressum < lib.fluidContent
    tx_impressum {
        templateName = Angelshop/Impressum
        dataProcessing {
            100 = MB\Angelshop\DataProcessing\ContentElementProcessor
            100 {
                references.fieldName = tx_angelshop_domain_model_fontawesome
            }
        }

        dataProcessing {
            110 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            110 {
                references.fieldName = image
            }
        }
    }

    tx_project < lib.fluidContent
    tx_project {
        templateName = Angelshop/Project
        dataProcessing {
            10 = MB\Angelshop\DataProcessing\ContentElementProcessor
            10 {
                references.fieldName = assets
            }
        }
    }

    tx_table < lib.fluidContent
    tx_table {
        templateName = Angelshop/Table
        dataProcessing {
            10 = MB\Angelshop\DataProcessing\ContentElementProcessor
            10 {
                references.fieldName = assets
            }
        }
    }

    tx_accordion < lib.fluidContent
    tx_accordion {
        templateName = Angelshop/Accordion
        dataProcessing {
            10 = MB\Angelshop\DataProcessing\ContentElementProcessor
            10 {
                references.fieldName = assets
            }
        }
    }

    tx_sidebarList < lib.fluidContent
    tx_sidebarList {
        templateName = Angelshop/SidebarList
        dataProcessing {
            10 = MB\Angelshop\DataProcessing\ContentElementProcessor
            10 {
                references.fieldName = assets
            }
        }
    }
}
