# ==============================================
# FE-Plugin configuration for EXT:news
# ==============================================
plugin.tx_news {
    mvc.callDefaultActionIfActionCantBeResolved = 1
    view {
        templateRootPaths {
            0 = EXT:news/Resources/Private/Templates/
            1 = {$plugin.tx_news.view.templateRootPath}
        }

        partialRootPaths {
            0 = EXT:news/Resources/Private/Partials/
            1 = {$plugin.tx_news.view.partialRootPath}
        }

        layoutRootPaths {
            0 = EXT:news/Resources/Private/Layouts/
            1 = {$plugin.tx_news.view.layoutRootPath}
        }

        widget.GeorgRinger\News\ViewHelpers\Widget\PaginateViewHelper.templateRootPath = EXT:angelshop/Resources/Private/News/Templates/
    }

    # Modify the translation
    _LOCAL_LANG {
        default {
            more-link_more = more >>
        }
    }

    # ====================================
    # Settings available inside Controller and View by accessing $this->settings or {settings.xyz}
    # ====================================
    settings {
        cssFile = {$plugin.tx_news.settings.cssFile}

        #Displays a dummy image if the news have no media items
        displayDummyIfNoMedia = 0

        # Output format
        format = html

        facebookLocale = de_DE
        googlePlusLocale = de

        # --------------
        #  Detail
        # --------------
        detail {
            errorHandling = pageNotFoundHandler
            checkPidOfNewsRecord = 0
            registerProperties = keywords,title
            showSocialShareButtons = 0
        }
        search {
            fields = teaser,title,bodytext
        }

        # Opengraph implementation
        opengraph {
            site_name = ABA-Angelshop
            type = article
            email = info@aba-angelshop.de
            region = Bavaria
            country-name = Germany
        }
    }
}