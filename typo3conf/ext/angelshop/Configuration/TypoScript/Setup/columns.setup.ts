temp.typo3searchWrap = <!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end-->
# Column configuration
lib.contents.columns {


    main = COA
    main {
        20 < styles.content.get
        20.wrap < temp.typo3searchWrap
    }
    special = COA
    special {
        20 < styles.content.get
        20.select.where = colPos=1
    }
    bottom = COA
    bottom {
        20 < styles.content.get
        20.select.where = colPos=2
    }
}

# Content before and after
lib.contents.before = COA
lib.contents.before {
    stdWrap.required = 1
    stdWrap.wrap = <div class="contentBefore">|</div>
}

lib.contents.after = COA
lib.contents.after {
    stdWrap.required = 1
    stdWrap.wrap = <div class="contentAfter">|</div>
}