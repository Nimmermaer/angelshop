TCEFORM {
    pages {
        layout.disabled = 1
        backend_layout.removeItems = -1
        backend_layout_next_level.removeItems = -1
    }

    tt_content {
        imagewidth.disabled = 1
        imageheight.disabled = 1
        imageborder.disabled = 1
        imagecols.disabled = 1
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
                4 =Teaser
            }
        }

        header_position.disabled = 1
        date.disabled = 1
        layout.types.uploads.altLabels.1 = Zeige Icon
        layout.types.uploads.altLabels.2 = Zeige Thumbnail
        header_layout {
            altLabels {
                0 = Default
                1 = H1
                2 = H2
                3 = H3
                4 = H4
                5 = H5
            }
        }
    }
}

