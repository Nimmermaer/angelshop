mod{
    web_layout.tt_content.preview {
        tx_teaser =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Teaser.html
        tx_slider =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Slider.html
        tx_callToAction =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/CallToAction.html
        tx_tab =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Tab.html
        tx_serviceList =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/ServiceList.html
        tx_impressum =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Impressum.html
        tx_project =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Project.html
        tx_sidebarList =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/SidebarList.html
        tx_team =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Team.html
        tx_table =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Table.html
        tx_accordion =  EXT:angelshop/Resources/Private/Contentelements/Templates/Angelshop/Preview/Accordion.html
     }
    wizards.newContentElement.wizardItems.common {
        elements {
            tx_teaser {
                iconIdentifier = mimetypes-x-backend_layout
                title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_teaser.title
                description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_teaser.description
                tt_content_defValues {
                    CType = tx_teaser
                }
            }
            tx_slider {
                iconIdentifier = content-image
                title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_slider.title
                description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_slider.description
                tt_content_defValues {
                    CType = tx_slider
                }
            }
            tx_callToAction {
                iconIdentifier = content-image
                title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_callToAction.title
                description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_callToAction.description
                tt_content_defValues {
                    CType = tx_callToAction
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
            tx_tab {
                iconIdentifier = content-image
                title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_tab.title
                description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_tab.description
                tt_content_defValues {
                    CType = tx_tab
                }
            }
            tx_serviceList {
                iconIdentifier = content-image
                title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_serviceList.title
                description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_serviceList.description
                tt_content_defValues {
                    CType = tx_serviceList
                }
            }
            tx_impressum {
                iconIdentifier = content-image
                title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_impressum.title
                description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_impressum.description
                tt_content_defValues {
                    CType = tx_serviceList
                }
            }
            tx_project {
                iconIdentifier = content-image
                title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_project.title
                description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_project.description
                tt_content_defValues {
                    CType = tx_project
                }
            }
            tx_sidebarList {
                iconIdentifier = content-bullets
                title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_sidebarList.title
                description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_sidebarList.description
                tt_content_defValues {
                    CType = tx_sidebarList
                }
            }
            tx_accordion {
                iconIdentifier = content-image
                title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_accordion.title
                description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_accordion.description
                tt_content_defValues {
                    CType = tx_accordion
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
            tx_team {
                iconIdentifier = content-table
                title = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_team.title
                description = LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_team.description
                tt_content_defValues {
                    CType = tx_team
                }
            }
        }
        show = *
    }
}