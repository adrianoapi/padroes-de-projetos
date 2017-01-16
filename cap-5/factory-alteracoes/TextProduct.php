<?php

include_once 'Product.php';

class TextProduct implements Product
{

    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = NULL.
                '<!doctype html>
                <html>
                    <head>
                        <style type="text/css">
                            header {
                                color: #900;
                                font-weight: bold;
                                font-size: 24px;
                                font-family: Verdana, Geneva, sans-serif;
                            }
                            p {
                                font-family: Verdana, Genva, sans-serif;
                                font-size: 12px;
                            }
                        </style>
                        <meta charset="UTF-8">
                        <title>Mali</title>
                    </head>
                    <body>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                    </body>
                </html>
                ';
        return $this->mfgProduct;
    }

}
