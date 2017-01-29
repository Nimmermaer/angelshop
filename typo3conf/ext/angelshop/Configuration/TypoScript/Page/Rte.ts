RTE {
    classes := removeFromList(csc-frame-frame1, csc-frame-frame2l)
    default {
        proc.allowedClasses := removeFromList(csc-frame-frame1, csc-frame-frame2)
        hideButtons = about, table,textstyle, textindicator,subscript, superscript
        showButtons := addToList(underline)
        buttons {
            formatblock {
                removeItems = h5, h6,pre, address, article, aside, blockquote, div, footer, header, nav, section, p
            }

            blockstyle {
                tags {
                    all {
                        allowedClasses := removeFromList(csc-frame-frame1, csc-frame-frame2)
                    }

                    p {
                        allowedClasses := removeFromList(csc-frame-frame1, csc-frame-frame2)
                    }

                    showTagFreeClasse = 1
                    postfixLabelWithClassName = 1
                }
            }
        }
    }
}