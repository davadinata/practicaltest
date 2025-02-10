<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Distributor_model extends CI_Model
{
    public function get_all_distributor()
    {
        return $this->db->get('distributor')->result_array();
    }

    public function add($data)
    {
        return $this->db->insert('distributor', $data);
    }

    public function get_countries()
    {
        return [
            "AF" => "Afghanistan",
            "AL" => "Albania",
            "DZ" => "Algeria",
            "AD" => "Andorra",
            "AO" => "Angola",
            "AR" => "Argentina",
            "AU" => "Australia",
            "AT" => "Austria",
            "BD" => "Bangladesh",
            "BE" => "Belgium",
            "BR" => "Brazil",
            "CA" => "Canada",
            "CN" => "China",
            "CO" => "Colombia",
            "DE" => "Germany",
            "FR" => "France",
            "GB" => "United Kingdom",
            "ID" => "Indonesia",
            "IN" => "India",
            "IT" => "Italy",
            "JP" => "Japan",
            "KR" => "South Korea",
            "MX" => "Mexico",
            "NL" => "Netherlands",
            "NG" => "Nigeria",
            "PH" => "Philippines",
            "RU" => "Russia",
            "SG" => "Singapore",
            "ES" => "Spain",
            "SE" => "Sweden",
            "CH" => "Switzerland",
            "TH" => "Thailand",
            "TR" => "Turkey",
            "US" => "United States",
            "VN" => "Vietnam",
            "ZA" => "South Africa"
        ];
    }
}
