TCEFORM {
    pages {
        layout.disabled = 1
        backend_layout.removeItems = -1
        backend_layout_next_level.removeItems = -1
        }
    tt_content {
         CType {
                removeItems := addToList(table,login,bullets,uploads,div,shortcut,mailform)
            }
        imagewidth.disabled = 1
        imageheight.disabled = 1
        imageborder.disabled = 1
        imagecols.disabled = 1
        header_position.disabled = 1
        date.disabled = 1
        imageorient {
            removeItems = 1,2,9,10,17,18
        }

        layout {
            altLabels {
                1 = Team
                2 = Projekt
                3 = Call-To-Action
            }

            addItems {
                4 = Teaser
            }
        }

        header_layout {
            altLabels {
                0 = Default
                1 = H1
                2 = H2
                3 = H3
                4 = H4
                5 = H5
                100 = Versteckt
            }
        }
         menu_type.addItems {
                101 = ABA-Angelshop Produktliste
            }
    }
}

TCAdefaults {
    fe_users.module_sys_dmail_html = 1
    tt_address.module_sys_dmail_html = 1
}

tx_news.templateLayouts {
    1 = Detail : News
    6 = Liste : News Widget
    2 = Liste : Bild Liste
    3 = Liste : Symbol Liste
    7 = Liste : Rahmen
    4 = Kategorien
    5 = Suche
}