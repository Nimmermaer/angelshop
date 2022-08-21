<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 11.01.2015
 * Time: 00:40
 */

namespace MB\Angelshop\Service;

//require_once '\typo3conf\ext\angelshop\Classes\Service\Import.php';
//$import = new \MB\Angelshop\Service\Import();
//$import->import();
//die();

class Import
{
    public function import(): void
    {
        $db = mysqli_connect('localhost', 'root', '', 'old_shop');

        if ($db->connect_errno > 0) {
            die('error');
        }
        $query = "SELECT pd.products_id, pd.products_name, pd.products_keywords, pd.products_description,  p.products_model, p.products_price ,(SELECT manufacturers_name FROM manufacturers as m WHERE m.manufacturers_id = p.manufacturers_id  ) as manufacturers_name
                  FROM products_description as pd,  products as p
                  WHERE pd.language_id = '2'
                  AND pd.products_id = p.products_id; ";
        $query .= "SELECT customers_firstname, customers_lastname, customers_email_address , customers_telephone
                   FROM customers
                   WHERE customers_lastname <> 'Blunck'";

        $id = $db->insert_id;
        $index = 0;
        if ($db->multi_query($query)) {
            do {
                if ($result = $db->store_result()) {
                    while ($row = $result->fetch_assoc()) {
                        $erg[$index][] = $row;
                    }
                }
                if ($db->more_results()) {
                    $index++;
                }
            } while ($db->more_results() && $db->next_result());
        }

        $db->close();

        $db2 = mysqli_connect('localhost', 'root', '', 'db556869213');
        if ($db2->connect_errno > 0) {
            die('Unable to connect to database [' . $db->connect_error . ']');
        }

        // var_dump($erg);

        foreach ($erg[1] as $result) {
            $inputQuery = "INSERT INTO fe_users (first_name, last_name, email, telephone)
                            VALUES ('" . utf8_encode($result['customers_firstname']) . "','" . utf8_encode($result['customers_lastname']) . "','" . utf8_encode($result['customers_email_address']) . "','" . utf8_encode($result['customers_telephone']) . "')";

            if (mysqli_query($db2, $inputQuery)) {
                // echo 'Customer <br/>';
            } else {
                echo " Error: " . $inputQuery . " <br /> " . mysqli_error($db2);
            }
        }

        $tx_abatemplate_product = 1;
        foreach ($erg[0] as $result) {
            $date = time();
            $queryPage = "INSERT INTO pages (pid, title, doktype,crdate, tstamp, perms_user, perms_group, cruser_id,urltype )
                      VALUE ( 13 ,'" . $db2->real_escape_string($result['products_name']) . "', 1 ," . $date . "," . $date . ",31,27,1 ,1)";

            if (mysqli_query($db2, $queryPage)) {
                //   echo 'finally';
            } else {
                echo "Error" . $queryPage . '<br />' . mysqli_error($db2);

                if (mysqli_query($db2, $queryPage)) {
                    //   echo 'finally';
                } else {
                    echo "Error" . $queryPage . '<br />' . mysqli_error($db2);
                }

                $previewId = $db2->insert_id;

                $queryProducts = "INSERT INTO tt_content (pid,CType, tx_abatemplate_product_image_id, header,bodytext,tx_abatemplate_product,tx_abatemplate_product_category, tx_abatemplate_product_manufacturer_name, tx_abatemplate_product_price,image, image_zoom)
                              VALUE ( " . $previewId . ", 'ce_product', '" . $db2->real_escape_string($result['products_id']) . " ','" .
                    $db2->real_escape_string($result['products_name']) . " ',' " .
                    $db2->real_escape_string($result['products_description']) . " ', " .
                    $tx_abatemplate_product . ",' " .
                    $db2->real_escape_string($result['products_model']) . "',' " .
                    $db2->real_escape_string($result['manufacturers_name']) . "' ,'" .
                    $db2->real_escape_string(($result['products_price'])) . "'
                            ,1,1)";

                if (mysqli_query($db2, $queryProducts)) {
                    //  echo '$queryProducts <br />';
                } else {
                    echo " Error: " . $queryProducts . " <br /> " . mysqli_error($db2);
                }

                $imageUID = $db2->insert_id;

                $queryImage = "INSERT INTO sys_file_reference(pid, uid_local, uid_foreign , l10n_diffsource , tablenames, fieldname)
                          VALUE ((SELECT pid FROM tt_content WHERE uid = " . $imageUID . "),
                          (SELECT uid FROM sys_file WHERE identifier like '%/user_upload/product_images/original_images/" . $result['products_id'] . "_0.%'),
                           " . $imageUID . ",
                            ' ', 'tt_content', 'image')";

                if (mysqli_query($db2, $queryImage)) {
                    echo '$queryImage <br />';
                } else {
                    echo " Error: " . $queryImage . " <br /> " . mysqli_error($db2);
                }

                /**
                 * sys_file_refernece == pid = uid.tt_content
                 */
            }
        }
    }
}
