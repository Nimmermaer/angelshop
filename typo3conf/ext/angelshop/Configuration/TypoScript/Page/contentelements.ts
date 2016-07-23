mod {
    web_layout.tt_content.preview {
        tx_slider = EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Slider.html
        tx_impressum = EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Impressum.html
        tx_tab = EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Tab.html
        tx_table = EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Table.html
      }

    wizards.newContentElement.wizardItems {
        angelshop {
            header = Angelshop
            elements {
                tx_impressum {
                    iconIdentifier = content-image
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_impressum.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_impressum.description
                    tt_content_defValues {
                        CType = tx_impressum
                    }
                }
                tx_table {
                    iconIdentifier = content-table
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_table.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_table.description
                    tt_content_defValues {
                        CType = tx_table
                    }
                }
            }
            show = *
        }

        common {
            elements {
                tx_slider {
                    iconIdentifier = content-image
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_slider.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_slider.description
                    tt_content_defValues {
                        CType = tx_slider
                    }
                }

                tx_service {
                    iconIdentifier = content-beside-text-img-above-center
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_service.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_service.description
                    tt_content_defValues {
                        CType = tx_service
                    }
                }

                tx_trader_slider {
                    iconIdentifier = content-beside-text-img-above-center
                    title = Trader Slider
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_service.description
                    tt_content_defValues {
                        CType = tx_trader_slider
                    }
                }

                tx_tab {
                    iconIdentifier = content-image
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_tab.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_tab.description
                    tt_content_defValues {
                        CType = tx_tab
                    }
                }
                tx_gallery {
                    iconIdentifier = content-table
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_gallery.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_gallery.description
                    tt_content_defValues {
                        CType = tx_gallery
                    }
                }
            }
            show = *
        }
    }
}