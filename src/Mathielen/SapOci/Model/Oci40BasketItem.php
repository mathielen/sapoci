<?php


namespace Mathielen\SapOci\Model;

use Assert\Assertion;

class Oci40BasketItem implements OciBasketItemInterface
{
    private $description;

    private $matnr;

    private $quantity;

    private $unit;

    private $price;

    private $currency;

    private $priceUnit;

    private $leadtime;

    private $longText;

    private $vendor;

    private $vendorMat;

    private $manufactCode;

    private $manufactMat;

    private $matGroup;

    private $service;

    private $contract;

    private $contractItem;

    private $extQuoteId;

    private $extQuoteItem;

    private $extProductId;

    private $attachment;

    private $attachmentTitle;

    private $attachmentPurpose;

    private $extSchemaType;

    private $extCategoryId;

    private $extCategory;

    private $sldSysName;

    private $custField1;

    private $custField2;

    private $custField3;

    private $custField4;

    private $custField5;

    public static function create()
    {
        return new self();
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        Assertion::maxLength((string)$description, 40, "Description max. length is 40");

        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMatnr()
    {
        return $this->matnr;
    }

    /**
     * @param mixed $matnr
     */
    public function setMatnr($matnr)
    {
        Assertion::maxLength((string)$matnr, 40, "Matnr max. length is 40");

        $this->matnr = $matnr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        Assertion::maxLength((string)$quantity, 15, "Quantity max. length is 15");

        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param mixed $unit
     */
    public function setUnit($unit)
    {
        Assertion::maxLength((string)$unit, 3, "Unit max. length is 3");

        $this->unit = $unit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        Assertion::maxLength((string)$price, 15, "price max. length is 15");

        $this->price = $price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        Assertion::maxLength((string)$currency, 5, "currency max. length is 5");

        $this->currency = $currency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceUnit()
    {
        return $this->priceUnit;
    }

    /**
     * @param mixed $priceUnit
     */
    public function setPriceUnit($priceUnit)
    {
        Assertion::maxLength((string)$priceUnit, 5, "priceUnit max. length is 5");

        $this->priceUnit = $priceUnit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLeadtime()
    {
        return $this->leadtime;
    }

    /**
     * @param mixed $leadtime
     */
    public function setLeadtime($leadtime)
    {
        Assertion::maxLength((string)$leadtime, 5, "leadtime max. length is 5");

        $this->leadtime = $leadtime;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongText()
    {
        return $this->longText;
    }

    /**
     * @param mixed $longText
     */
    public function setLongText($longText)
    {
        $this->longText = $longText;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param mixed $vendor
     */
    public function setVendor($vendor)
    {
        Assertion::maxLength((string)$vendor, 10, "vendor max. length is 10");

        $this->vendor = $vendor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVendorMat()
    {
        return $this->vendorMat;
    }

    /**
     * @param mixed $vendorMat
     */
    public function setVendorMat($vendorMat)
    {
        Assertion::maxLength((string)$vendorMat, 40, "vendorMat max. length is 40");

        $this->vendorMat = $vendorMat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getManufactCode()
    {
        return $this->manufactCode;
    }

    /**
     * @param mixed $manufactCode
     */
    public function setManufactCode($manufactCode)
    {
        Assertion::maxLength((string)$manufactCode, 10, "manufactCode max. length is 10");

        $this->manufactCode = $manufactCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getManufactMat()
    {
        return $this->manufactMat;
    }

    /**
     * @param mixed $manufactMat
     */
    public function setManufactMat($manufactMat)
    {
        Assertion::maxLength((string)$manufactMat, 40, "manufactMat max. length is 40");

        $this->manufactMat = $manufactMat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMatGroup()
    {
        return $this->matGroup;
    }

    /**
     * @param mixed $matGroup
     */
    public function setMatGroup($matGroup)
    {
        Assertion::maxLength((string)$matGroup, 10, "matGroup max. length is 10");

        $this->matGroup = $matGroup;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
    {
        Assertion::maxLength((string)$service, 1, "service max. length is 1");

        $this->service = $service;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param mixed $contract
     */
    public function setContract($contract)
    {
        Assertion::maxLength((string)$contract, 10, "contract max. length is 10");

        $this->contract = $contract;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContractItem()
    {
        return $this->contractItem;
    }

    /**
     * @param mixed $contractItem
     */
    public function setContractItem($contractItem)
    {
        Assertion::maxLength((string)$contractItem, 5, "contractItem max. length is 5");

        $this->contractItem = $contractItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtQuoteId()
    {
        return $this->extQuoteId;
    }

    /**
     * @param mixed $extQuoteId
     */
    public function setExtQuoteId($extQuoteId)
    {
        Assertion::maxLength((string)$extQuoteId, 35, "extQuoteId max. length is 35");

        $this->extQuoteId = $extQuoteId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtQuoteItem()
    {
        return $this->extQuoteItem;
    }

    /**
     * @param mixed $extQuoteItem
     */
    public function setExtQuoteItem($extQuoteItem)
    {
        Assertion::maxLength((string)$extQuoteItem, 10, "extQuoteItem max. length is 10");

        $this->extQuoteItem = $extQuoteItem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtProductId()
    {
        return $this->extProductId;
    }

    /**
     * @param mixed $extProductId
     */
    public function setExtProductId($extProductId)
    {
        Assertion::maxLength((string)$extProductId, 40, "extProductId max. length is 40");

        $this->extProductId = $extProductId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param mixed $attachment
     */
    public function setAttachment($attachment)
    {
        Assertion::maxLength((string)$attachment, 255, "attachment max. length is 255");

        $this->attachment = $attachment;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttachmentTitle()
    {
        return $this->attachmentTitle;
    }

    /**
     * @param mixed $attachmentTitle
     */
    public function setAttachmentTitle($attachmentTitle)
    {
        Assertion::maxLength((string)$attachmentTitle, 255, "attachmentTitle max. length is 255");

        $this->attachmentTitle = $attachmentTitle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttachmentPurpose()
    {
        return $this->attachmentPurpose;
    }

    /**
     * @param mixed $attachmentPurpose
     */
    public function setAttachmentPurpose($attachmentPurpose)
    {
        Assertion::maxLength((string)$attachmentPurpose, 1, "attachmentPurpose max. length is 1");

        $this->attachmentPurpose = $attachmentPurpose;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtSchemaType()
    {
        return $this->extSchemaType;
    }

    /**
     * @param mixed $extSchemaType
     */
    public function setExtSchemaType($extSchemaType)
    {
        Assertion::maxLength((string)$extSchemaType, 10, "extSchemaType max. length is 10");

        $this->extSchemaType = $extSchemaType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtCategoryId()
    {
        return $this->extCategoryId;
    }

    /**
     * @param mixed $extCategoryId
     */
    public function setExtCategoryId($extCategoryId)
    {
        Assertion::maxLength((string)$extCategoryId, 60, "extCategoryId max. length is 60");

        $this->extCategoryId = $extCategoryId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtCategory()
    {
        return $this->extCategory;
    }

    /**
     * @param mixed $extCategory
     */
    public function setExtCategory($extCategory)
    {
        Assertion::maxLength((string)$extCategory, 40, "extCategory max. length is 40");

        $this->extCategory = $extCategory;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSldSysName()
    {
        return $this->sldSysName;
    }

    /**
     * @param mixed $sldSysName
     */
    public function setSldSysName($sldSysName)
    {
        Assertion::maxLength((string)$sldSysName, 60, "sldSysName max. length is 60");

        $this->sldSysName = $sldSysName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustField1()
    {
        return $this->custField1;
    }

    /**
     * @param mixed $custField1
     */
    public function setCustField1($custField1)
    {
        Assertion::maxLength((string)$custField1, 10, "custField1 max. length is 10");

        $this->custField1 = $custField1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustField2()
    {
        return $this->custField2;
    }

    /**
     * @param mixed $custField2
     */
    public function setCustField2($custField2)
    {
        Assertion::maxLength((string)$custField2, 10, "custField2 max. length is 10");

        $this->custField2 = $custField2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustField3()
    {
        return $this->custField3;
    }

    /**
     * @param mixed $custField3
     */
    public function setCustField3($custField3)
    {
        Assertion::maxLength((string)$custField3, 10, "custField3 max. length is 10");

        $this->custField3 = $custField3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustField4()
    {
        return $this->custField4;
    }

    /**
     * @param mixed $custField4
     */
    public function setCustField4($custField4)
    {
        Assertion::maxLength((string)$custField4, 20, "custField4 max. length is 20");

        $this->custField4 = $custField4;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustField5()
    {
        return $this->custField5;
    }

    /**
     * @param mixed $custField5
     */
    public function setCustField5($custField5)
    {
        Assertion::maxLength((string)$custField5, 255, "custField5 max. length is 255"); //even though documentations says 50

        $this->custField5 = $custField5;

        return $this;
    }

    /**
     * Returns associated array of field=>value
     *
     * @return array
     */
    public function getFields()
    {
        return array_filter(
            [
                'NEW_ITEM-DESCRIPTION' => $this->getDescription(),
                'NEW_ITEM-MATNR' => $this->getMatnr(),
                'NEW_ITEM-QUANTITY' => $this->getQuantity(),
                'NEW_ITEM-UNIT' => $this->getUnit(),
                'NEW_ITEM-PRICE' => $this->getPrice(),
                'NEW_ITEM-CURRENCY' => $this->getCurrency(),
                'NEW_ITEM-PRICEUNIT' => $this->getPriceUnit(),
                'NEW_ITEM-LEADTIME' => $this->getLeadtime(),
                'NEW_ITEM-LONGTEXT' => $this->getLongText(),
                'NEW_ITEM-VENDOR' => $this->getVendor(),
                'NEW_ITEM-VENDORMAT' => $this->getVendorMat(),
                'NEW_ITEM-MANUFACTCODE' => $this->getManufactCode(),
                'NEW_ITEM-MANUFACTMAT' => $this->getManufactMat(),
                'NEW_ITEM-MATGROUP' => $this->getMatGroup(),
                'NEW_ITEM-SERVICE' => $this->getService(),
                'NEW_ITEM-CONTRACT' => $this->getContract(),
                'NEW_ITEM-CONTRACT_ITEM' => $this->getContractItem(),
                'NEW_ITEM-EXT_QUOTE_ID' => $this->getExtQuoteId(),
                'NEW_ITEM-EXT_QUOTE_ITEM' => $this->getExtQuoteItem(),
                'NEW_ITEM-EXT_PRODUCT_ID' => $this->getExtProductId(),
                'NEW_ITEM-ATTACHMENT' => $this->getAttachment(),
                'NEW_ITEM-ATTACHMENT_TITLE' => $this->getAttachmentTitle(),
                'NEW_ITEM-ATTACHMENT_PURPOSE' => $this->getAttachmentPurpose(),
                'NEW_ITEM-EXT_SCHEMA_TYPE' => $this->getExtSchemaType(),
                'NEW_ITEM-EXT_CATEGORY_ID' => $this->getExtCategoryId(),
                'NEW_ITEM-EXT_CATEGORY' => $this->getExtCategory(),
                'NEW_ITEM-SLD_SYS_NAME' => $this->getSldSysName(),
                'NEW_ITEM-CUST_FIELD1' => $this->getCustField1(),
                'NEW_ITEM-CUST_FIELD2' => $this->getCustField2(),
                'NEW_ITEM-CUST_FIELD3' => $this->getCustField3(),
                'NEW_ITEM-CUST_FIELD4' => $this->getCustField4(),
                'NEW_ITEM-CUST_FIELD5' => $this->getCustField5(),
            ]
        );
    }

    public static function addFieldToFormData($formFieldName, $fieldValue, $lineNum, array &$formData)
    {
        if ($formFieldName === 'NEW_ITEM-LONGTEXT') {
            $formData['NEW_ITEM-LONGTEXT_' . $lineNum . ':132'] = $fieldValue;
            return;
        }

        $formData[$formFieldName][$lineNum] = $fieldValue;
    }
}
