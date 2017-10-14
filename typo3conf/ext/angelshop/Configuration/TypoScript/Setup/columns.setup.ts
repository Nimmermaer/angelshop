temp.typo3searchWrap = <!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end-->
# Column configuration
lib {
    contents {
        columns {
            main = COA
            main {
                20 < styles.content.get
                20 {
	                select.where = colPos=0
	                wrap < temp.typo3searchWrap
                }
            }

            special = COA
            special {
                20 < styles.content.get
                20{
	                select.where = colPos=1
	                wrap < temp.typo3searchWrap
                }
            }

            footerLeft = COA
            footerLeft {
                20 < styles.content.get
                20{
	                select.where = colPos=2
	                slide = -1
	                wrap = <!--TYPO3SEARCH_end-->|
                }
            }

            footerMiddle = COA
            footerMiddle {
                20 < styles.content.get
                20{
	                select.where = colPos=3
	                slide = -1
	                wrap = <!--TYPO3SEARCH_end-->|
                }
            }

            footerRight = COA
            footerRight {
                20 < styles.content.get
                20{
	                select.where = colPos=4
	                slide = -1
	                wrap = <!--TYPO3SEARCH_end-->|
                }
            }
        }
    }
}
