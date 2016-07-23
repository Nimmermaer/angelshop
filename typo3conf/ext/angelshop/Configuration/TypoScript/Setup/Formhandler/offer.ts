plugin.Tx_Formhandler.settings.predef.default >
plugin.Tx_Formhandler.settings.predef.kontakt {
    templateFile =EXT:angelshop/Resources/Private/Formhandler/Offer/Offer.html
    langFile =  EXT:angelshop/Resources/Private/Formhandler/formhandler_locallang.xml
    formValuesPrefix = formhandler
    name = Angebotsformular Aba-Angelshop
    #debug = 1
    validators.1.class = Validator\DefaultValidator
    validators.1.config.fieldConf {
        mail_name.errorCheck.1 = required
        email.errorCheck.1 = required
        email.errorCheck.2 = email
    }

    addErrorAnchors = 1
    singleErrorTemplate {
        totalWrap = |
        singleWrap = <p class="bg-danger">|</p>
    }

    errorListTemplate {
        totalWrap = <div style="color: red;">Es sind folgende Fehler aufgetreten: <ul>|</ul></div>
        singleWrap = <li>|</li>
    }
    preProcessors {
        1.class = Typoheads\Formhandler\PreProcessor\LoadDefaultValues
        1.config {
            1 {
                product.defaultValue = TEXT
                product.defaultValue.data = GP:order
            }
        }
    }
    finishers {
        1 {
            class = Typoheads\Formhandler\Finisher\Mail
            config {
                mailer.class = Typoheads\Formhandler\Mailer\TYPO3Mailer
                admin {
                    templateFile = EXT:angelshop/Resources/Private/Formhandler/Offer/Admin.html
                    to_email = test@phth.de
                    to_name = ABA-Angelshop
                    subject = Kundenanfrage
                    sender_email = email
                }
            }
        }

        2 {
            class = Typoheads\Formhandler\Finisher\Redirect
            config.redirectPage = {$global.page.redirectAfterMail}
        }
    }
}
