<?php


namespace Mathielen\SapOci\Model;

use Assert\Assertion;

class OciBaseBasketItem implements OciBasketItemInterface
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
        return new static();
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
        self::enforeLength($matnr, 'matnr', 40);

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
        self::enforeLength($quantity, 'quantity', 15);

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
        self::enforeLength($unit, 'unit', 3);

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
        self::enforeLength($currency, 'currency', 5);

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
        self::enforeLength($priceUnit, 'priceUnit', 5);

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
        self::enforeLength($leadtime, 'leadtime', 5);

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
        self::enforeLength($vendor, 'vendor', 10);

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
        self::enforeLength($vendorMat, 'vendorMat', 40);

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
        self::enforeLength($manufactCode, 'manufactCode', 10);

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
        self::enforeLength($manufactMat, 'manufactMat', 40);

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
        self::enforeLength($matGroup, 'matGroup', 10);

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
        self::enforeLength($service, 'service', 1);

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
        self::enforeLength($contract, 'contract', 10);

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
        self::enforeLength($contractItem, 'contractItem', 5);

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
        self::enforeLength($extQuoteId, 'extQuoteId', 35);

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
        self::enforeLength($extQuoteItem, 'extQuoteItem', 10);

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
        self::enforeLength($extProductId, 'extProductId', 40);

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
        self::enforeLength($attachment, 'attachment', 255);

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
        self::enforeLength($attachmentTitle, 'attachmentTitle', 255);

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
        self::enforeLength($attachmentPurpose, 'attachmentPurpose', 1);

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
        self::enforeLength($extSchemaType, 'extSchemaType', 10);

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
        self::enforeLength($extCategoryId, 'extCategoryId', 60);

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
        self::enforeLength($extCategory, 'extCategory', 40);

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
        self::enforeLength($sldSysName, 'sldSysName', 60);

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
        self::enforeLength($custField1, 'custField1', 10);

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
        self::enforeLength($custField2, 'custField2', 10);

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
        self::enforeLength($custField3, 'custField3', 10);

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
        self::enforeLength($custField4, 'custField4', 20);

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
        self::enforeLength($custField5, 'custField5', 255); //even though documentations says 50

        $this->custField5 = $custField5;

        return $this;
    }

    /**
     * Returns associated array of field=>value
     */
    public function getFields(): array
    {
        return [
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
        ];
    }

    public static function addFieldToFormData($formFieldName, $fieldValue, $lineNum, array &$formData)
    {
        if ($formFieldName === 'NEW_ITEM-LONGTEXT') {
            $formData['NEW_ITEM-LONGTEXT_' . $lineNum . ':132'][] = $fieldValue;
            return;
        }

        $formData[$formFieldName][$lineNum] = $fieldValue;
    }

    public function toArray()
    {
        return array_filter(get_object_vars($this));
    }

    private static function enforeLength(string $field, string $name, int $maxLen): void
    {
        Assertion::maxLength((string)$field, $maxLen, "$name max. length is $maxLen. Was '$field'.");
    }

}
