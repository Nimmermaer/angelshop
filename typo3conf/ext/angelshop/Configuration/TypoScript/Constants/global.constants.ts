translate = LLL:EXT:angelshop/Resources/Private/Language/locallang.xlf

# Global constants
# Here defined constants are available in all pagetrees of the TYPO3 instance.
global {
    homePageUid = 1
    storage {
        navService = 23
    }

    languageLabels {
        current = Deutsch
        availableSysLanguageUids = 0,1
        availableLabels = Deutsch||English
    }

    navigation {
        footerStartPoint = 11
        serviceStartPoint = 3
        metaStartPoint = 1
    }

    page {
        offerPid = 12
        redirectAfterMail = 962
        search {
            pid = 960
        }
    }
}

[applicationContext = Development]
    global {
        page {
            search {
                pid = 12
            }
        }
    }
[global]