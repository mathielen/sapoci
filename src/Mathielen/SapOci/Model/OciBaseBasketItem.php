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

	public static function create(): self
	{
		return new static();
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription(string $description): self
	{
		self::enforeLength($description, 'description', 40);

		$this->description = $description;

		return $this;
	}

	public function getMatnr(): ?string
	{
		return $this->matnr;
	}

	public function setMatnr(string $matnr): self
	{
		self::enforeLength($matnr, 'matnr', 40);

		$this->matnr = $matnr;

		return $this;
	}

	public function getQuantity(): ?string
	{
		return $this->quantity;
	}

	public function setQuantity(string $quantity): self
	{
		self::enforeLength($quantity, 'quantity', 15);

		$this->quantity = $quantity;

		return $this;
	}

	public function getUnit(): ?string
	{
		return $this->unit;
	}

	public function setUnit(string $unit): self
	{
		self::enforeLength($unit, 'unit', 3);

		$this->unit = $unit;

		return $this;
	}

	public function getPrice(): ?string
	{
		return $this->price;
	}

	public function setPrice(string $price): self
	{
		self::enforeLength($price, 'price', 15);

		$this->price = $price;

		return $this;
	}

	public function getCurrency(): ?string
	{
		return $this->currency;
	}

	public function setCurrency(string $currency): self
	{
		self::enforeLength($currency, 'currency', 5);

		$this->currency = $currency;

		return $this;
	}

	public function getPriceUnit(): ?string
	{
		return $this->priceUnit;
	}

	public function setPriceUnit(string $priceUnit): self
	{
		self::enforeLength($priceUnit, 'priceUnit', 5);

		$this->priceUnit = $priceUnit;

		return $this;
	}

	public function getLeadtime(): ?string
	{
		return $this->leadtime;
	}

	public function setLeadtime(string $leadtime): self
	{
		self::enforeLength($leadtime, 'leadtime', 5);

		$this->leadtime = $leadtime;

		return $this;
	}

	public function getLongText(): ?string
	{
		return $this->longText;
	}

	public function setLongText(string $longText): self
	{
		$this->longText = $longText;

		return $this;
	}

	public function getVendor(): ?string
	{
		return $this->vendor;
	}

	public function setVendor(string $vendor): self
	{
		self::enforeLength($vendor, 'vendor', 10);

		$this->vendor = $vendor;

		return $this;
	}

	public function getVendorMat(): ?string
	{
		return $this->vendorMat;
	}

	public function setVendorMat(string $vendorMat): self
	{
		self::enforeLength($vendorMat, 'vendorMat', 40);

		$this->vendorMat = $vendorMat;

		return $this;
	}

	public function getManufactCode(): ?string
	{
		return $this->manufactCode;
	}

	public function setManufactCode(string $manufactCode): self
	{
		self::enforeLength($manufactCode, 'manufactCode', 10);

		$this->manufactCode = $manufactCode;

		return $this;
	}

	public function getManufactMat(): ?string
	{
		return $this->manufactMat;
	}

	public function setManufactMat(string $manufactMat): self
	{
		self::enforeLength($manufactMat, 'manufactMat', 40);

		$this->manufactMat = $manufactMat;

		return $this;
	}

	public function getMatGroup(): ?string
	{
		return $this->matGroup;
	}

	public function setMatGroup(string $matGroup): self
	{
		self::enforeLength($matGroup, 'matGroup', 10);

		$this->matGroup = $matGroup;

		return $this;
	}

	public function getService(): ?string
	{
		return $this->service;
	}

	public function setService(string $service): self
	{
		self::enforeLength($service, 'service', 1);

		$this->service = $service;

		return $this;
	}

	public function getContract(): ?string
	{
		return $this->contract;
	}

	public function setContract(string $contract): self
	{
		self::enforeLength($contract, 'contract', 10);

		$this->contract = $contract;

		return $this;
	}

	public function getContractItem(): ?string
	{
		return $this->contractItem;
	}

	public function setContractItem(string $contractItem): self
	{
		self::enforeLength($contractItem, 'contractItem', 5);

		$this->contractItem = $contractItem;

		return $this;
	}

	public function getExtQuoteId(): ?string
	{
		return $this->extQuoteId;
	}

	public function setExtQuoteId(string $extQuoteId): self
	{
		self::enforeLength($extQuoteId, 'extQuoteId', 35);

		$this->extQuoteId = $extQuoteId;

		return $this;
	}

	public function getExtQuoteItem(): ?string
	{
		return $this->extQuoteItem;
	}

	public function setExtQuoteItem(string $extQuoteItem): self
	{
		self::enforeLength($extQuoteItem, 'extQuoteItem', 10);

		$this->extQuoteItem = $extQuoteItem;

		return $this;
	}

	public function getExtProductId(): ?string
	{
		return $this->extProductId;
	}

	public function setExtProductId(string $extProductId): self
	{
		self::enforeLength($extProductId, 'extProductId', 40);

		$this->extProductId = $extProductId;

		return $this;
	}

	public function getAttachment(): ?string
	{
		return $this->attachment;
	}

	public function setAttachment(string $attachment): self
	{
		self::enforeLength($attachment, 'attachment', 255);

		$this->attachment = $attachment;

		return $this;
	}

	public function getAttachmentTitle(): ?string
	{
		return $this->attachmentTitle;
	}

	public function setAttachmentTitle(string $attachmentTitle): self
	{
		self::enforeLength($attachmentTitle, 'attachmentTitle', 255);

		$this->attachmentTitle = $attachmentTitle;

		return $this;
	}

	public function getAttachmentPurpose(): ?string
	{
		return $this->attachmentPurpose;
	}

	public function setAttachmentPurpose(string $attachmentPurpose): self
	{
		self::enforeLength($attachmentPurpose, 'attachmentPurpose', 1);

		$this->attachmentPurpose = $attachmentPurpose;

		return $this;
	}

	public function getExtSchemaType(): ?string
	{
		return $this->extSchemaType;
	}

	public function setExtSchemaType(string $extSchemaType): self
	{
		self::enforeLength($extSchemaType, 'extSchemaType', 10);

		$this->extSchemaType = $extSchemaType;

		return $this;
	}

	public function getExtCategoryId(): ?string
	{
		return $this->extCategoryId;
	}

	public function setExtCategoryId(string $extCategoryId): self
	{
		self::enforeLength($extCategoryId, 'extCategoryId', 60);

		$this->extCategoryId = $extCategoryId;

		return $this;
	}

	public function getExtCategory(): ?string
	{
		return $this->extCategory;
	}

	public function setExtCategory(string $extCategory): self
	{
		self::enforeLength($extCategory, 'extCategory', 40);

		$this->extCategory = $extCategory;

		return $this;
	}

	public function getSldSysName(): ?string
	{
		return $this->sldSysName;
	}

	public function setSldSysName(string $sldSysName): self
	{
		self::enforeLength($sldSysName, 'sldSysName', 60);

		$this->sldSysName = $sldSysName;

		return $this;
	}

	public function getCustField1(): ?string
	{
		return $this->custField1;
	}

	public function setCustField1(string $custField1): self
	{
		self::enforeLength($custField1, 'custField1', 10);

		$this->custField1 = $custField1;

		return $this;
	}

	public function getCustField2(): ?string
	{
		return $this->custField2;
	}

	public function setCustField2(string $custField2): self
	{
		self::enforeLength($custField2, 'custField2', 10);

		$this->custField2 = $custField2;

		return $this;
	}

	public function getCustField3(): ?string
	{
		return $this->custField3;
	}

	public function setCustField3(string $custField3): self
	{
		self::enforeLength($custField3, 'custField3', 10);

		$this->custField3 = $custField3;

		return $this;
	}

	public function getCustField4(): ?string
	{
		return $this->custField4;
	}

	public function setCustField4(string $custField4): self
	{
		self::enforeLength($custField4, 'custField4', 20);

		$this->custField4 = $custField4;

		return $this;
	}

	public function getCustField5(): ?string
	{
		return $this->custField5;
	}

	public function setCustField5(string $custField5): self
	{
		self::enforeLength($custField5, 'custField5', 255); //even though documentations says 50

		$this->custField5 = $custField5;

		return $this;
	}

	/**
	 * Returns associated array of field=>value.
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

	public static function addFieldToFormData($formFieldName, $fieldValue, $lineNum, array &$formData): void
	{
		if ('NEW_ITEM-LONGTEXT' === $formFieldName) {
			$formData['NEW_ITEM-LONGTEXT_'.$lineNum.':132'][] = $fieldValue;

			return;
		}

		$formData[$formFieldName][$lineNum] = $fieldValue;
	}

	public function toArray(): array
	{
		return \array_filter(\get_object_vars($this));
	}

	protected static function enforeLength($field, string $name, int $maxLen): void
	{
		Assertion::maxLength((string) $field, $maxLen, "$name max. length is $maxLen. Was '$field'.");
	}
}
