# ==============================================
# FE-Plugin configuration for EXT:news
# ==============================================
plugin.tx_news {
    view {
        templateRootPaths>
        templateRootPaths {
            0 = {$plugin.tx_news.view.templateRootPath}
            1 >
        }

        partialRootPaths >
        partialRootPaths {
            0 = EXT:news/Resources/Private/Partials/
            1 = {$plugin.tx_news.view.partialRootPath}
        }

        layoutRootPaths >
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
            fields = teaser,title,bodytext,ingredient
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

lib.newsList = USER
lib.newsList {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    extensionName = News
    pluginName = Pi1
    vendorName = GeorgRinger
    switchableControllerActions {
        News {
            1 = list
        }
    }
    settings < plugin.tx_news.settings
    settings {
        templateLayout = 10
        categories = 1067
        detailPid = 1068
        overrideFlexformSettingsIfEmpty := addToList(detailPid)
        startingpoint = 1067
    }
}


lib.newsHeader = USER
lib.newsHeader {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    extensionName = News
    pluginName = Pi1
    vendorName = GeorgRinger
    controller = News
    action = detail
    switchableControllerActions {
        News {
            1 = detail
        }
    }
    view {
    settings.templateLayout = 99
        templateRootPaths >
        templateRootPaths.1 = EXT:angelshop/Resources/Private/Plugins/Templates/
    }

}