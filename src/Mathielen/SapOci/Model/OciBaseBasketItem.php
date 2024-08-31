<?php

namespace Mathielen\SapOci\Model;

use Assert\Assertion;

class OciBaseBasketItem implements OciBasketItemInterface
{
	private ?string $description = null;

	private ?string $matnr = null;

	private ?string $quantity = null;

	private ?string $unit = null;

	private ?string $price = null;

	private ?string $currency = null;

	private ?string $priceUnit = null;

	private ?string $leadtime = null;

	private ?string $longText = null;

	private ?string $vendor = null;

	private ?string $vendorMat = null;

	private ?string $manufactCode = null;

	private ?string $manufactMat = null;

	private ?string $matGroup = null;

	private ?string $service = null;

	private ?string $contract = null;

	private ?string $contractItem = null;

	private ?string $extQuoteId = null;

	private ?string $extQuoteItem = null;

	private ?string $extProductId = null;

	private ?string $attachment = null;

	private ?string $attachmentTitle = null;

	private ?string $attachmentPurpose = null;

	private ?string $extSchemaType = null;

	private ?string $extCategoryId = null;

	private ?string $extCategory = null;

	private ?string $sldSysName = null;

	private ?string $custField1 = null;

	private ?string $custField2 = null;

	private ?string $custField3 = null;

	private ?string $custField4 = null;

	private ?string $custField5 = null;

	public static function create(): self
	{
		return new static();
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription(?string $description = null): self
	{
		self::enforceLength('description', 40, $description);

		$this->description = $description;

		return $this;
	}

	public function getMatnr(): ?string
	{
		return $this->matnr;
	}

	public function setMatnr(?string $matnr = null): self
	{
		self::enforceLength('matnr', 40, $matnr);

		$this->matnr = $matnr;

		return $this;
	}

	public function getQuantity(): ?string
	{
		return $this->quantity;
	}

	public function setQuantity(?string $quantity = null): self
	{
		self::enforceLength('quantity', 15, $quantity);

		$this->quantity = $quantity;

		return $this;
	}

	public function getUnit(): ?string
	{
		return $this->unit;
	}

	public function setUnit(?string $unit = null): self
	{
		self::enforceLength('unit', 3, $unit);

		$this->unit = $unit;

		return $this;
	}

	public function getPrice(): ?string
	{
		return $this->price;
	}

	public function setPrice(?string $price = null): self
	{
		self::enforceLength('price', 15, $price);

		$this->price = $price;

		return $this;
	}

	public function getCurrency(): ?string
	{
		return $this->currency;
	}

	public function setCurrency(?string $currency = null): self
	{
		self::enforceLength('currency', 5, $currency);

		$this->currency = $currency;

		return $this;
	}

	public function getPriceUnit(): ?string
	{
		return $this->priceUnit;
	}

	public function setPriceUnit(?string $priceUnit = null): self
	{
		self::enforceLength('priceUnit', 5, $priceUnit);

		$this->priceUnit = $priceUnit;

		return $this;
	}

	public function getLeadtime(): ?string
	{
		return $this->leadtime;
	}

	public function setLeadtime(?string $leadtime = null): self
	{
		self::enforceLength('leadtime', 5, $leadtime);

		$this->leadtime = $leadtime;

		return $this;
	}

	public function getLongText(): ?string
	{
		return $this->longText;
	}

	public function setLongText(?string $longText = null): self
	{
		$this->longText = $longText;

		return $this;
	}

	public function getVendor(): ?string
	{
		return $this->vendor;
	}

	public function setVendor(?string $vendor = null): self
	{
		self::enforceLength('vendor', 10, $vendor);

		$this->vendor = $vendor;

		return $this;
	}

	public function getVendorMat(): ?string
	{
		return $this->vendorMat;
	}

	public function setVendorMat(?string $vendorMat = null): self
	{
		self::enforceLength('vendorMat', 40, $vendorMat);

		$this->vendorMat = $vendorMat;

		return $this;
	}

	public function getManufactCode(): ?string
	{
		return $this->manufactCode;
	}

	public function setManufactCode(?string $manufactCode = null): self
	{
		self::enforceLength('manufactCode', 10, $manufactCode);

		$this->manufactCode = $manufactCode;

		return $this;
	}

	public function getManufactMat(): ?string
	{
		return $this->manufactMat;
	}

	public function setManufactMat(?string $manufactMat = null): self
	{
		self::enforceLength('manufactMat', 40, $manufactMat);

		$this->manufactMat = $manufactMat;

		return $this;
	}

	public function getMatGroup(): ?string
	{
		return $this->matGroup;
	}

	public function setMatGroup(?string $matGroup = null): self
	{
		self::enforceLength('matGroup', 10, $matGroup);

		$this->matGroup = $matGroup;

		return $this;
	}

	public function getService(): ?string
	{
		return $this->service;
	}

	public function setService(?string $service = null): self
	{
		self::enforceLength('service', 1, $service);

		$this->service = $service;

		return $this;
	}

	public function getContract(): ?string
	{
		return $this->contract;
	}

	public function setContract(?string $contract = null): self
	{
		self::enforceLength('contract', 10, $contract);

		$this->contract = $contract;

		return $this;
	}

	public function getContractItem(): ?string
	{
		return $this->contractItem;
	}

	public function setContractItem(?string $contractItem = null): self
	{
		self::enforceLength('contractItem', 5, $contractItem);

		$this->contractItem = $contractItem;

		return $this;
	}

	public function getExtQuoteId(): ?string
	{
		return $this->extQuoteId;
	}

	public function setExtQuoteId(?string $extQuoteId = null): self
	{
		self::enforceLength('extQuoteId', 35, $extQuoteId);

		$this->extQuoteId = $extQuoteId;

		return $this;
	}

	public function getExtQuoteItem(): ?string
	{
		return $this->extQuoteItem;
	}

	public function setExtQuoteItem(?string $extQuoteItem = null): self
	{
		self::enforceLength('extQuoteItem', 10, $extQuoteItem);

		$this->extQuoteItem = $extQuoteItem;

		return $this;
	}

	public function getExtProductId(): ?string
	{
		return $this->extProductId;
	}

	public function setExtProductId(?string $extProductId = null): self
	{
		self::enforceLength('extProductId', 40, $extProductId);

		$this->extProductId = $extProductId;

		return $this;
	}

	public function getAttachment(): ?string
	{
		return $this->attachment;
	}

	public function setAttachment(?string $attachment = null): self
	{
		self::enforceLength('attachment', 255, $attachment);

		$this->attachment = $attachment;

		return $this;
	}

	public function getAttachmentTitle(): ?string
	{
		return $this->attachmentTitle;
	}

	public function setAttachmentTitle(?string $attachmentTitle = null): self
	{
		self::enforceLength('attachmentTitle', 255, $attachmentTitle);

		$this->attachmentTitle = $attachmentTitle;

		return $this;
	}

	public function getAttachmentPurpose(): ?string
	{
		return $this->attachmentPurpose;
	}

	public function setAttachmentPurpose(?string $attachmentPurpose = null): self
	{
		self::enforceLength('attachmentPurpose', 1, $attachmentPurpose);

		$this->attachmentPurpose = $attachmentPurpose;

		return $this;
	}

	public function getExtSchemaType(): ?string
	{
		return $this->extSchemaType;
	}

	public function setExtSchemaType(?string $extSchemaType = null): self
	{
		self::enforceLength('extSchemaType', 10, $extSchemaType);

		$this->extSchemaType = $extSchemaType;

		return $this;
	}

	public function getExtCategoryId(): ?string
	{
		return $this->extCategoryId;
	}

	public function setExtCategoryId(?string $extCategoryId = null): self
	{
		self::enforceLength('extCategoryId', 60, $extCategoryId);

		$this->extCategoryId = $extCategoryId;

		return $this;
	}

	public function getExtCategory(): ?string
	{
		return $this->extCategory;
	}

	public function setExtCategory(?string $extCategory = null): self
	{
		self::enforceLength('extCategory', 40, $extCategory);

		$this->extCategory = $extCategory;

		return $this;
	}

	public function getSldSysName(): ?string
	{
		return $this->sldSysName;
	}

	public function setSldSysName(?string $sldSysName = null): self
	{
		self::enforceLength('sldSysName', 60, $sldSysName);

		$this->sldSysName = $sldSysName;

		return $this;
	}

	public function getCustField1(): ?string
	{
		return $this->custField1;
	}

	public function setCustField1(?string $custField1 = null): self
	{
		self::enforceLength('custField1', 10, $custField1);

		$this->custField1 = $custField1;

		return $this;
	}

	public function getCustField2(): ?string
	{
		return $this->custField2;
	}

	public function setCustField2(?string $custField2 = null): self
	{
		self::enforceLength('custField2', 10, $custField2);

		$this->custField2 = $custField2;

		return $this;
	}

	public function getCustField3(): ?string
	{
		return $this->custField3;
	}

	public function setCustField3(?string $custField3 = null): self
	{
		self::enforceLength('custField3', 10, $custField3);

		$this->custField3 = $custField3;

		return $this;
	}

	public function getCustField4(): ?string
	{
		return $this->custField4;
	}

	public function setCustField4(?string $custField4 = null): self
	{
		self::enforceLength('custField4', 20, $custField4);

		$this->custField4 = $custField4;

		return $this;
	}

	public function getCustField5(): ?string
	{
		return $this->custField5;
	}

	public function setCustField5(?string $custField5 = null): self
	{
		self::enforceLength('custField5', 255, $custField5); //even though documentations says 50

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

	public function toArray(): array
	{
		return \array_filter(\get_object_vars($this));
	}

	protected static function enforceLength(string $name, int $maxLen, string $value = null): void
	{
		if (null === $value) {
			return;
		}

		Assertion::maxLength($value, $maxLen, "$name max. length is $maxLen. Was '$value'.");
	}
}
