<?php
 function getCompanyId($code) {
        static $companyIds;

        if (!isset($companyIds[$code])) {
            $sql = '';
            $company = Company::model()->findByAttributes(array('company_code' => $code));
            $companyIds[$code] = $company->id;
        }

        return $companyIds[$code];
    }
?>

