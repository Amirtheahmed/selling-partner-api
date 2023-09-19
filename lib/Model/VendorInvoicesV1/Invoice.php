<?php
/**
 * Invoice
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Payments
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorInvoicesV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Invoice extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_type' => 'string',
        'id' => 'string',
        'reference_number' => 'string',
        'date' => 'string',
        'remit_to_party' => '\SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification',
        'ship_to_party' => '\SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification',
        'ship_from_party' => '\SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification',
        'bill_to_party' => '\SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification',
        'payment_terms' => '\SellingPartnerApi\Model\VendorInvoicesV1\PaymentTerms',
        'invoice_total' => '\SellingPartnerApi\Model\VendorInvoicesV1\Money',
        'tax_details' => '\SellingPartnerApi\Model\VendorInvoicesV1\TaxDetails[]',
        'additional_details' => '\SellingPartnerApi\Model\VendorInvoicesV1\AdditionalDetails[]',
        'charge_details' => '\SellingPartnerApi\Model\VendorInvoicesV1\ChargeDetails[]',
        'allowance_details' => '\SellingPartnerApi\Model\VendorInvoicesV1\AllowanceDetails[]',
        'items' => '\SellingPartnerApi\Model\VendorInvoicesV1\InvoiceItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invoice_type' => null,
        'id' => null,
        'reference_number' => null,
        'date' => null,
        'remit_to_party' => null,
        'ship_to_party' => null,
        'ship_from_party' => null,
        'bill_to_party' => null,
        'payment_terms' => null,
        'invoice_total' => null,
        'tax_details' => null,
        'additional_details' => null,
        'charge_details' => null,
        'allowance_details' => null,
        'items' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'invoice_type' => 'invoiceType',
        'id' => 'id',
        'reference_number' => 'referenceNumber',
        'date' => 'date',
        'remit_to_party' => 'remitToParty',
        'ship_to_party' => 'shipToParty',
        'ship_from_party' => 'shipFromParty',
        'bill_to_party' => 'billToParty',
        'payment_terms' => 'paymentTerms',
        'invoice_total' => 'invoiceTotal',
        'tax_details' => 'taxDetails',
        'additional_details' => 'additionalDetails',
        'charge_details' => 'chargeDetails',
        'allowance_details' => 'allowanceDetails',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_type' => 'setInvoiceType',
        'id' => 'setId',
        'reference_number' => 'setReferenceNumber',
        'date' => 'setDate',
        'remit_to_party' => 'setRemitToParty',
        'ship_to_party' => 'setShipToParty',
        'ship_from_party' => 'setShipFromParty',
        'bill_to_party' => 'setBillToParty',
        'payment_terms' => 'setPaymentTerms',
        'invoice_total' => 'setInvoiceTotal',
        'tax_details' => 'setTaxDetails',
        'additional_details' => 'setAdditionalDetails',
        'charge_details' => 'setChargeDetails',
        'allowance_details' => 'setAllowanceDetails',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_type' => 'getInvoiceType',
        'id' => 'getId',
        'reference_number' => 'getReferenceNumber',
        'date' => 'getDate',
        'remit_to_party' => 'getRemitToParty',
        'ship_to_party' => 'getShipToParty',
        'ship_from_party' => 'getShipFromParty',
        'bill_to_party' => 'getBillToParty',
        'payment_terms' => 'getPaymentTerms',
        'invoice_total' => 'getInvoiceTotal',
        'tax_details' => 'getTaxDetails',
        'additional_details' => 'getAdditionalDetails',
        'charge_details' => 'getChargeDetails',
        'allowance_details' => 'getAllowanceDetails',
        'items' => 'getItems'
    ];



    const INVOICE_TYPE_INVOICE = 'Invoice';
    const INVOICE_TYPE_CREDIT_NOTE = 'CreditNote';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues()
    {
        $baseVals = [
            self::INVOICE_TYPE_INVOICE,
            self::INVOICE_TYPE_CREDIT_NOTE,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['invoice_type'] = $data['invoice_type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['reference_number'] = $data['reference_number'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['remit_to_party'] = $data['remit_to_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['bill_to_party'] = $data['bill_to_party'] ?? null;
        $this->container['payment_terms'] = $data['payment_terms'] ?? null;
        $this->container['invoice_total'] = $data['invoice_total'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['additional_details'] = $data['additional_details'] ?? null;
        $this->container['charge_details'] = $data['charge_details'] ?? null;
        $this->container['allowance_details'] = $data['allowance_details'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['invoice_type'] === null) {
            $invalidProperties[] = "'invoice_type' can't be null";
        }
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (
            !is_null($this->container['invoice_type']) &&
            !in_array(strtoupper($this->container['invoice_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'invoice_type', must be one of '%s'",
                $this->container['invoice_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['remit_to_party'] === null) {
            $invalidProperties[] = "'remit_to_party' can't be null";
        }
        if ($this->container['invoice_total'] === null) {
            $invalidProperties[] = "'invoice_total' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets invoice_type
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param string $invoice_type Identifies the type of invoice.
     *
     * @return self
     */
    public function setInvoiceType($invoice_type)
    {
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!in_array(strtoupper($invoice_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'invoice_type', must be one of '%s'",
                    $invoice_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }
    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique number relating to the charges defined in this document. This will be invoice number if the document type is Invoice or CreditNote number if the document type is Credit Note. Failure to provide this reference will result in a rejection.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number An additional unique reference number used for regulatory or other purposes.
     *
     * @return self
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }
    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date Defines a date and time according to ISO8601.
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }
    /**
     * Gets remit_to_party
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification
     */
    public function getRemitToParty()
    {
        return $this->container['remit_to_party'];
    }

    /**
     * Sets remit_to_party
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification $remit_to_party remit_to_party
     *
     * @return self
     */
    public function setRemitToParty($remit_to_party)
    {
        $this->container['remit_to_party'] = $remit_to_party;

        return $this;
    }
    /**
     * Gets ship_to_party
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification|null
     */
    public function getShipToParty()
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification|null $ship_to_party ship_to_party
     *
     * @return self
     */
    public function setShipToParty($ship_to_party)
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }
    /**
     * Gets ship_from_party
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification|null
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification|null $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty($ship_from_party)
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }
    /**
     * Gets bill_to_party
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification|null
     */
    public function getBillToParty()
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\PartyIdentification|null $bill_to_party bill_to_party
     *
     * @return self
     */
    public function setBillToParty($bill_to_party)
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }
    /**
     * Gets payment_terms
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\PaymentTerms|null
     */
    public function getPaymentTerms()
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\PaymentTerms|null $payment_terms payment_terms
     *
     * @return self
     */
    public function setPaymentTerms($payment_terms)
    {
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }
    /**
     * Gets invoice_total
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\Money
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\Money $invoice_total invoice_total
     *
     * @return self
     */
    public function setInvoiceTotal($invoice_total)
    {
        $this->container['invoice_total'] = $invoice_total;

        return $this;
    }
    /**
     * Gets tax_details
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\TaxDetails[]|null
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\TaxDetails[]|null $tax_details Total tax amount details for all line items.
     *
     * @return self
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }
    /**
     * Gets additional_details
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\AdditionalDetails[]|null
     */
    public function getAdditionalDetails()
    {
        return $this->container['additional_details'];
    }

    /**
     * Sets additional_details
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\AdditionalDetails[]|null $additional_details Additional details provided by the selling party, for tax related or other purposes.
     *
     * @return self
     */
    public function setAdditionalDetails($additional_details)
    {
        $this->container['additional_details'] = $additional_details;

        return $this;
    }
    /**
     * Gets charge_details
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\ChargeDetails[]|null
     */
    public function getChargeDetails()
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\ChargeDetails[]|null $charge_details Total charge amount details for all line items.
     *
     * @return self
     */
    public function setChargeDetails($charge_details)
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }
    /**
     * Gets allowance_details
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\AllowanceDetails[]|null
     */
    public function getAllowanceDetails()
    {
        return $this->container['allowance_details'];
    }

    /**
     * Sets allowance_details
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\AllowanceDetails[]|null $allowance_details Total allowance amount details for all line items.
     *
     * @return self
     */
    public function setAllowanceDetails($allowance_details)
    {
        $this->container['allowance_details'] = $allowance_details;

        return $this;
    }
    /**
     * Gets items
     *
     * @return \SellingPartnerApi\Model\VendorInvoicesV1\InvoiceItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SellingPartnerApi\Model\VendorInvoicesV1\InvoiceItem[]|null $items The list of invoice items.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }
}


