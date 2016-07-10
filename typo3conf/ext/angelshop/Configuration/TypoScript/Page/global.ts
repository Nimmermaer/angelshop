# Column naming
TCEFORM.pages {
    # Disable field "layout" (we use backend_layouts instead)
    layout.disabled = 1
    # Disable option "none" for backend_layouts
    backend_layout.removeItems = -1
    backend_layout_next_level.removeItems = -1
}

# Disable additional header options
TCEFORM.tt_content {
    #header_layout.removeItems = 4,5
    header_position.disabled = 1
    date.disabled = 1
    layout.types.uploads.altLabels.1 = Zeige Icon
    layout.types.uploads.altLabels.2 = Zeige Thumbnail
}
TCEFORM.tt_content.header_layout {
    altLabels  {
        0 = Default
        1 = H1
        2 = H2
        3 = H3
        4 = H4
        5 = H5
    }
}
