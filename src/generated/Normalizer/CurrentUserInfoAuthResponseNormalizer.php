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
    class CurrentUserInfoAuthResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('password_stored', $data)) {
                $object->setPasswordStored($data['password_stored']);
                unset($data['password_stored']);
            }
            if (\array_key_exists('auth_accounts', $data)) {
                $values = [];
                foreach ($data['auth_accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Parchmate\LaravelNeon\Generated\Model\CurrentUserAuthAccount::class, 'json', $context);
                }
                $object->setAuthAccounts($values);
                unset($data['auth_accounts']);
            }
            if (\array_key_exists('linked_accounts', $data)) {
                $values_1 = [];
                foreach ($data['linked_accounts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Parchmate\LaravelNeon\Generated\Model\LinkedAuthAccount::class, 'json', $context);
                }
                $object->setLinkedAccounts($values_1);
                unset($data['linked_accounts']);
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
                unset($data['provider']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['password_stored'] = $object->getPasswordStored();
            $values = [];
            foreach ($object->getAuthAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['auth_accounts'] = $values;
            $values_1 = [];
            foreach ($object->getLinkedAccounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['linked_accounts'] = $values_1;
            $data['provider'] = $object->getProvider();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse::class => false];
        }
    }
} else {
    class CurrentUserInfoAuthResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('password_stored', $data)) {
                $object->setPasswordStored($data['password_stored']);
                unset($data['password_stored']);
            }
            if (\array_key_exists('auth_accounts', $data)) {
                $values = [];
                foreach ($data['auth_accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Parchmate\LaravelNeon\Generated\Model\CurrentUserAuthAccount::class, 'json', $context);
                }
                $object->setAuthAccounts($values);
                unset($data['auth_accounts']);
            }
            if (\array_key_exists('linked_accounts', $data)) {
                $values_1 = [];
                foreach ($data['linked_accounts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Parchmate\LaravelNeon\Generated\Model\LinkedAuthAccount::class, 'json', $context);
                }
                $object->setLinkedAccounts($values_1);
                unset($data['linked_accounts']);
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
                unset($data['provider']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['password_stored'] = $object->getPasswordStored();
            $values = [];
            foreach ($object->getAuthAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['auth_accounts'] = $values;
            $values_1 = [];
            foreach ($object->getLinkedAccounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['linked_accounts'] = $values_1;
            $data['provider'] = $object->getProvider();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse::class => false];
        }
    }
}