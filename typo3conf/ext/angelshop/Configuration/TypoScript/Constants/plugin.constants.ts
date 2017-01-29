plugin.tx_angelshop {
    view {
        # cat=plugin.tx_angelshop_gallery/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:angelshop/Resources/Private/Templates/
        # cat=plugin.tx_angelshop_gallery/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:angelshop/Resources/Private/Partials/
        # cat=plugin.tx_angelshop_gallery/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:angelshop/Resources/Private/Layouts/
    }

    persistence {
        # cat=plugin.tx_angelshop_gallery//a; type=string; label=Default storage PID
        storagePid =
    }

    settings {
        address {
            newsletterStoragePid = 1051
        }

        openweathermapApi = 9e31371905782f75d67d42ff929d711e
        logoutNewsletter = 1049
        loginNewsletter = 1049
        newsletterThankYouPid = 1052
    }
}

plugin.tx_angelshop_gallery {
    view {
        # cat=plugin.tx_angelshop_gallery/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:angelshop/Resources/Private/Templates/
        # cat=plugin.tx_angelshop_gallery/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:angelshop/Resources/Private/Partials/
        # cat=plugin.tx_angelshop_gallery/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:angelshop/Resources/Private/Layouts/
    }

    persistence {
        # cat=plugin.tx_angelshop_gallery//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.tx_angelshop_teaserrow {
    view {
        # cat=plugin.tx_angelshop_teaserrow/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:angelshop/Resources/Private/Templates/
        # cat=plugin.tx_angelshop_teaserrow/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:angelshop/Resources/Private/Partials/
        # cat=plugin.tx_angelshop_teaserrow/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:angelshop/Resources/Private/Layouts/
    }

    persistence {
        # cat=plugin.tx_angelshop_teaserrow//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.tx_angelshop_fullwidthvideo {
    view {
        # cat=plugin.tx_angelshop_fullwidthvideo/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:angelshop/Resources/Private/Templates/
        # cat=plugin.tx_angelshop_fullwidthvideo/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:angelshop/Resources/Private/Partials/
        # cat=plugin.tx_angelshop_fullwidthvideo/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:angelshop/Resources/Private/Layouts/
    }

    persistence {
        # cat=plugin.tx_angelshop_fullwidthvideo//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.metaseo {
    metaTags.opengraph = 0
    social.googleplus.profilePageId = 101637966309914323974
}