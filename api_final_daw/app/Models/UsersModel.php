<?php

namespace App\Models;

class UsersModel extends Model {
    
    function insertContact($data) {
//        var_dump($data); die();
        $result = $this->db->insert('contacto', [
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone']
        ]);
        if (!is_null($this->db->error()[1])) {
            return array('success' => false,
                'description ' => $this->db->error()[2], 'results' => NULL);
        }
        return array('success' => true, 'description' => 'Data was inserted',
            'results' => $result);
    }

    function selectProducts() {
        $result = $this->db->select('products', ['productCode',
            'productName',
            'productLine',
            'productScale',
            'productVendor',
            'productDescription',
            'quantityInStock',
            'buyPrice',
            'MSRP'
        ]);
        if (!is_null($this->db->error()[1])) {
            return array('error' => true,
                'description ' => $this->db->error()[2]);
        } else if (empty($result)) {
            return array('NotFound' => true,
                'description' => '0 resultados');
        }
        return array('success' => true, 'description' => 'Products were found',
            'products' => $result);
    }

    function selectProductsById($id) {
        var_dump($employee);
        die();
        $result = $this->db->select('products', ['productCode',
            'productName',
            'productLine',
            'productScale',
            'productVendor',
            'productDescription',
            'quantityInStock',
            'buyPrice',
            'MSRP'
                ], [
            'productCode[=]' => $id
        ]);
        if (!is_null($this->db->error()[1])) {
            return array('error' => true,
                'description ' => $this->db->error()[2]);
        } else if (empty($result)) {
            return array('NotFound' => true,
                'description' => '0 resultados');
        }
        return array('success' => true, 'description' => 'One Products were found',
            'products' => $result);
    }    

}
