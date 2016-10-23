mod {
    web_layout.tt_content.preview {
        tx_slider = EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Slider.html
        tx_impressum = EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Impressum.html
        tx_tab = EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Tab.html
    }

    wizards.newContentElement.wizardItems {
        angelshop {
            header = Angelshop
            elements {
                tx_impressum {
                    iconIdentifier = map
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_impressum.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_impressum.description
                    tt_content_defValues {
                        CType = tx_impressum
                    }
                }

                ce_product {
                    iconIdentifier = product
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:ce_product.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:ce_product.description
                    tt_content_defValues {
                        CType = ce_product
                    }
                }

                angelshop_product {
                    iconIdentifier = productlist
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_product_list.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_product_list.description
                    tt_content_defValues {
                        CType = angelshop_product
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
                    iconIdentifier = service
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_service.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_service.description
                    tt_content_defValues {
                        CType = tx_service
                    }
                }

                tx_trader_slider {
                    iconIdentifier = business
                    title = Trader Slider
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_service.description
                    tt_content_defValues {
                        CType = tx_trader_slider
                    }
                }

                tx_tab {
                    iconIdentifier = tab
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_tab.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_tab.description
                    tt_content_defValues {
                        CType = tx_tab
                    }
                }

                tx_gallery {
                    iconIdentifier = gallery
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_gallery.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_gallery.description
                    tt_content_defValues {
                        CType = tx_gallery
                    }
                }
            }

            show = *
        }
        newsletter {
            header = Newsletter
            elements {
                tx_newsletter_image {
                    iconIdentifier = content-image
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_newsletter_image.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_newsletter_image.description
                    tt_content_defValues {
                        CType = tx_newsletter_image
                    }
                }
                tx_newsletter_text {
                    iconIdentifier = content-text
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_newsletter_text.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_newsletter_text.description
                    tt_content_defValues {
                        CType = tx_newsletter_text
                    }
                }
                tx_newsletter_textpic {
                    iconIdentifier = content-textpic
                    title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_newsletter_textpic.title
                    description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_newsletter_textpic.description
                    tt_content_defValues {
                        CType = tx_newsletter_textpic
                    }
                }
            }
            show = *
        }
    }
}



#[page|backend_layout=pagets__Newsletter]
#    mod.wizards.newContentElement.wizardItems.newsletter.show = tx_newsletter_textpic, tx_newsletter_text, tx_newsletter_image
#    mod.wizards.newContentElement.wizardItems.special.show =
#    mod.wizards.newContentElement.wizardItems.common.show =
#    mod.wizards.newContentElement.wizardItems.angelshop.show =
#    mod.wizards.newContentElement.wizardItems.forms.show =
#    TCEFORM.tt_content {
#        CType {
#            removeItems := addToList(list,indexed_search,tt_address)
#        }
#    }
#[global]