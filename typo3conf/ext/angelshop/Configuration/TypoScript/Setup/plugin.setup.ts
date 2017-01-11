plugin {
    tx_angelshop {
        view {
            templateRootPaths.0 = {$plugin.tx_angelshop.view.templateRootPath}
            partialRootPaths.0 = {$plugin.tx_angelshop.view.partialRootPath}
            layoutRootPaths.0 = {$plugin.tx_angelshop.view.layoutRootPath}
        }

        persistence {
            storagePid = {$plugin.tx_angelshop_gallery.persistence.storagePid}
        }

        settings {
            address {
                newsletterStoragePid = {$plugin.tx_angelshop.settings.address.newsletterStoragePid}
            }

            loginNewsletter = {$plugin.tx_angelshop.settings.loginNewsletter}
            newsletterThankYouPid = {$plugin.tx_angelshop.settings.newsletterThankYouPid}
        }

        contentElementRendering = RECORDS
        contentElementRendering {
            tables = tt_content
            source.current = 1
            dontCheckPid = 1
        }
    }

    tx_product_list {
        view {
            templateRootPaths.0 = {$plugin.tx_angelshop.view.templateRootPath}
            partialRootPaths.0 = {$plugin.tx_angelshop.view.partialRootPath}
            layoutRootPaths.0 = {$plugin.tx_angelshop.view.layoutRootPath}
        }
    }

    tx_angelshop_gallery {
        view {
            templateRootPaths.0 = {$plugin.tx_angelshop_gallery.view.templateRootPath}
            partialRootPaths.0 = {$plugin.tx_angelshop_gallery.view.partialRootPath}
            layoutRootPaths.0 = {$plugin.tx_angelshop_gallery.view.layoutRootPath}
        }

        persistence {
            storagePid = {$plugin.tx_angelshop_gallery.persistence.storagePid}
        }
    }

    tx_angelshop_teaserrow {
        view {
            templateRootPaths.0 = {$plugin.tx_angelshop_teaserrow.view.templateRootPath}
            partialRootPaths.0 = {$plugin.tx_angelshop_teaserrow.view.partialRootPath}
            layoutRootPaths.0 = {$plugin.tx_angelshop_teaserrow.view.layoutRootPath}
        }

        persistence {
            storagePid = {$plugin.tx_angelshop_teaserrow.persistence.storagePid}
        }
    }

    tx_angelshop_fullwidthvideo {
        view {
            templateRootPaths.0 = {$plugin.tx_angelshop_fullwidthvideo.view.templateRootPath}
            partialRootPaths.0 = {$plugin.tx_angelshop_fullwidthvideo.view.partialRootPath}
            layoutRootPaths.0 = {$plugin.tx_angelshop_fullwidthvideo.view.layoutRootPath}
        }

        persistence {
            storagePid = {$plugin.tx_angelshop_fullwidthvideo.persistence.storagePid}
        }
    }

    tx_angelshop_newsletter {
        view {
            templateRootPaths.0 = {$plugin.tx_angelshop_fullwidthvideo.view.templateRootPath}
            partialRootPaths.0 = {$plugin.tx_angelshop_fullwidthvideo.view.partialRootPath}
            layoutRootPaths.0 = {$plugin.tx_angelshop_fullwidthvideo.view.layoutRootPath}
        }

        persistence {
            storagePid = {$plugin.tx_angelshop_fullwidthvideo.persistence.storagePid}
        }
    }

    tx_frontend._CSS_DEFAULT_STYLE >
}

lib.weatherView = USER
lib.weatherView {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    extensionName = Angelshop
    pluginName = Weather
    vendorName = MB
    controller = Weather
    action = show
    view < plugin.tx_angelshop.view
    view {
        templateRootPaths.10 = EXT:angelshop/Resources/Private/Plugins/Templates
    }
    persistence < plugin.tx_angelshop.persistence
    settings < plugin.tx_angelshop.settings
    settings {
        arguments {
            title = Abtsdorfer See
            address = Abtsdorfer See, Saaldorf-Surheim
            appid = 9e31371905782f75d67d42ff929d711e
        }
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
    view < plugin.tx_news.view
    view {
        templateRootPaths.10 = EXT:angelshop/Resources/Private/Plugins/Templates
    }

    persistence < plugin.tx_news.persistence
    settings < plugin.tx_news.settings
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
        //categories = 49
        limit = 30
        detailPid = 31
        overrideFlexformSettingsIfEmpty := addToList(detailPid)
        startingpoint = 984
    }
}
