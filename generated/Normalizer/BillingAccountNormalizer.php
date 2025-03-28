<?php

namespace Vendor\Library\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Vendor\Library\Generated\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BillingAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\BillingAccount::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\BillingAccount::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\BillingAccount();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('payment_source', $data)) {
                $object->setPaymentSource($this->denormalizer->denormalize($data['payment_source'], \Vendor\Library\Generated\Model\PaymentSource::class, 'json', $context));
                unset($data['payment_source']);
            }
            if (\array_key_exists('subscription_type', $data)) {
                $object->setSubscriptionType($data['subscription_type']);
                unset($data['subscription_type']);
            }
            if (\array_key_exists('payment_method', $data)) {
                $object->setPaymentMethod($data['payment_method']);
                unset($data['payment_method']);
            }
            if (\array_key_exists('quota_reset_at_last', $data)) {
                $object->setQuotaResetAtLast(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['quota_reset_at_last']));
                unset($data['quota_reset_at_last']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
                unset($data['email']);
            }
            if (\array_key_exists('address_city', $data)) {
                $object->setAddressCity($data['address_city']);
                unset($data['address_city']);
            }
            if (\array_key_exists('address_country', $data)) {
                $object->setAddressCountry($data['address_country']);
                unset($data['address_country']);
            }
            if (\array_key_exists('address_country_name', $data)) {
                $object->setAddressCountryName($data['address_country_name']);
                unset($data['address_country_name']);
            }
            if (\array_key_exists('address_line1', $data)) {
                $object->setAddressLine1($data['address_line1']);
                unset($data['address_line1']);
            }
            if (\array_key_exists('address_line2', $data)) {
                $object->setAddressLine2($data['address_line2']);
                unset($data['address_line2']);
            }
            if (\array_key_exists('address_postal_code', $data)) {
                $object->setAddressPostalCode($data['address_postal_code']);
                unset($data['address_postal_code']);
            }
            if (\array_key_exists('address_state', $data)) {
                $object->setAddressState($data['address_state']);
                unset($data['address_state']);
            }
            if (\array_key_exists('orb_portal_url', $data)) {
                $object->setOrbPortalUrl($data['orb_portal_url']);
                unset($data['orb_portal_url']);
            }
            if (\array_key_exists('tax_id', $data)) {
                $object->setTaxId($data['tax_id']);
                unset($data['tax_id']);
            }
            if (\array_key_exists('tax_id_type', $data)) {
                $object->setTaxIdType($data['tax_id_type']);
                unset($data['tax_id_type']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['state'] = $object->getState();
            $data['payment_source'] = $this->normalizer->normalize($object->getPaymentSource(), 'json', $context);
            $data['subscription_type'] = $object->getSubscriptionType();
            $data['payment_method'] = $object->getPaymentMethod();
            $data['quota_reset_at_last'] = $object->getQuotaResetAtLast()?->format('Y-m-d\TH:i:sP');
            $data['name'] = $object->getName();
            $data['email'] = $object->getEmail();
            $data['address_city'] = $object->getAddressCity();
            $data['address_country'] = $object->getAddressCountry();
            if ($object->isInitialized('addressCountryName') && null !== $object->getAddressCountryName()) {
                $data['address_country_name'] = $object->getAddressCountryName();
            }
            $data['address_line1'] = $object->getAddressLine1();
            $data['address_line2'] = $object->getAddressLine2();
            $data['address_postal_code'] = $object->getAddressPostalCode();
            $data['address_state'] = $object->getAddressState();
            if ($object->isInitialized('orbPortalUrl') && null !== $object->getOrbPortalUrl()) {
                $data['orb_portal_url'] = $object->getOrbPortalUrl();
            }
            if ($object->isInitialized('taxId') && null !== $object->getTaxId()) {
                $data['tax_id'] = $object->getTaxId();
            }
            if ($object->isInitialized('taxIdType') && null !== $object->getTaxIdType()) {
                $data['tax_id_type'] = $object->getTaxIdType();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\BillingAccount::class => false];
        }
    }
} else {
    class BillingAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\BillingAccount::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\BillingAccount::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\BillingAccount();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('payment_source', $data)) {
                $object->setPaymentSource($this->denormalizer->denormalize($data['payment_source'], \Vendor\Library\Generated\Model\PaymentSource::class, 'json', $context));
                unset($data['payment_source']);
            }
            if (\array_key_exists('subscription_type', $data)) {
                $object->setSubscriptionType($data['subscription_type']);
                unset($data['subscription_type']);
            }
            if (\array_key_exists('payment_method', $data)) {
                $object->setPaymentMethod($data['payment_method']);
                unset($data['payment_method']);
            }
            if (\array_key_exists('quota_reset_at_last', $data)) {
                $object->setQuotaResetAtLast(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['quota_reset_at_last']));
                unset($data['quota_reset_at_last']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
                unset($data['email']);
            }
            if (\array_key_exists('address_city', $data)) {
                $object->setAddressCity($data['address_city']);
                unset($data['address_city']);
            }
            if (\array_key_exists('address_country', $data)) {
                $object->setAddressCountry($data['address_country']);
                unset($data['address_country']);
            }
            if (\array_key_exists('address_country_name', $data)) {
                $object->setAddressCountryName($data['address_country_name']);
                unset($data['address_country_name']);
            }
            if (\array_key_exists('address_line1', $data)) {
                $object->setAddressLine1($data['address_line1']);
                unset($data['address_line1']);
            }
            if (\array_key_exists('address_line2', $data)) {
                $object->setAddressLine2($data['address_line2']);
                unset($data['address_line2']);
            }
            if (\array_key_exists('address_postal_code', $data)) {
                $object->setAddressPostalCode($data['address_postal_code']);
                unset($data['address_postal_code']);
            }
            if (\array_key_exists('address_state', $data)) {
                $object->setAddressState($data['address_state']);
                unset($data['address_state']);
            }
            if (\array_key_exists('orb_portal_url', $data)) {
                $object->setOrbPortalUrl($data['orb_portal_url']);
                unset($data['orb_portal_url']);
            }
            if (\array_key_exists('tax_id', $data)) {
                $object->setTaxId($data['tax_id']);
                unset($data['tax_id']);
            }
            if (\array_key_exists('tax_id_type', $data)) {
                $object->setTaxIdType($data['tax_id_type']);
                unset($data['tax_id_type']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['state'] = $object->getState();
            $data['payment_source'] = $this->normalizer->normalize($object->getPaymentSource(), 'json', $context);
            $data['subscription_type'] = $object->getSubscriptionType();
            $data['payment_method'] = $object->getPaymentMethod();
            $data['quota_reset_at_last'] = $object->getQuotaResetAtLast()?->format('Y-m-d\TH:i:sP');
            $data['name'] = $object->getName();
            $data['email'] = $object->getEmail();
            $data['address_city'] = $object->getAddressCity();
            $data['address_country'] = $object->getAddressCountry();
            if ($object->isInitialized('addressCountryName') && null !== $object->getAddressCountryName()) {
                $data['address_country_name'] = $object->getAddressCountryName();
            }
            $data['address_line1'] = $object->getAddressLine1();
            $data['address_line2'] = $object->getAddressLine2();
            $data['address_postal_code'] = $object->getAddressPostalCode();
            $data['address_state'] = $object->getAddressState();
            if ($object->isInitialized('orbPortalUrl') && null !== $object->getOrbPortalUrl()) {
                $data['orb_portal_url'] = $object->getOrbPortalUrl();
            }
            if ($object->isInitialized('taxId') && null !== $object->getTaxId()) {
                $data['tax_id'] = $object->getTaxId();
            }
            if ($object->isInitialized('taxIdType') && null !== $object->getTaxIdType()) {
                $data['tax_id_type'] = $object->getTaxIdType();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\BillingAccount::class => false];
        }
    }
}