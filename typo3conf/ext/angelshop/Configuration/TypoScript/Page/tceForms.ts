TCEFORM.tt_content {
    CType {
        removeItems := addToList(table,login,bullets,uploads,div,shortcut,mailform)
    }

    menu_type.addItems {
        101 = ABA-Angelshop Produktliste
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