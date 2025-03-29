<?php

namespace Parchmate\LaravelNeon\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Parchmate\LaravelNeon\Generated\Runtime\Normalizer\CheckArray;
use Parchmate\LaravelNeon\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class PaymentSourceBankCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('last4', $data)) {
                $object->setLast4($data['last4']);
                unset($data['last4']);
            }
            if (\array_key_exists('brand', $data)) {
                $object->setBrand($data['brand']);
                unset($data['brand']);
            }
            if (\array_key_exists('exp_month', $data)) {
                $object->setExpMonth($data['exp_month']);
                unset($data['exp_month']);
            }
            if (\array_key_exists('exp_year', $data)) {
                $object->setExpYear($data['exp_year']);
                unset($data['exp_year']);
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
            $data['last4'] = $object->getLast4();
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['brand'] = $object->getBrand();
            }
            if ($object->isInitialized('expMonth') && null !== $object->getExpMonth()) {
                $data['exp_month'] = $object->getExpMonth();
            }
            if ($object->isInitialized('expYear') && null !== $object->getExpYear()) {
                $data['exp_year'] = $object->getExpYear();
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
            return [\Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard::class => false];
        }
    }
} else {
    class PaymentSourceBankCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('last4', $data)) {
                $object->setLast4($data['last4']);
                unset($data['last4']);
            }
            if (\array_key_exists('brand', $data)) {
                $object->setBrand($data['brand']);
                unset($data['brand']);
            }
            if (\array_key_exists('exp_month', $data)) {
                $object->setExpMonth($data['exp_month']);
                unset($data['exp_month']);
            }
            if (\array_key_exists('exp_year', $data)) {
                $object->setExpYear($data['exp_year']);
                unset($data['exp_year']);
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
            $data['last4'] = $object->getLast4();
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['brand'] = $object->getBrand();
            }
            if ($object->isInitialized('expMonth') && null !== $object->getExpMonth()) {
                $data['exp_month'] = $object->getExpMonth();
            }
            if ($object->isInitialized('expYear') && null !== $object->getExpYear()) {
                $data['exp_year'] = $object->getExpYear();
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
            return [\Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard::class => false];
        }
    }
}