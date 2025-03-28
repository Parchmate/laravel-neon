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
    class OrgApiKeysListResponseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\OrgApiKeysListResponseItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\OrgApiKeysListResponseItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\OrgApiKeysListResponseItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('created_by', $data)) {
                $object->setCreatedBy($this->denormalizer->denormalize($data['created_by'], \Vendor\Library\Generated\Model\ApiKeyCreatorData::class, 'json', $context));
                unset($data['created_by']);
            }
            if (\array_key_exists('last_used_at', $data) && $data['last_used_at'] !== null) {
                $object->setLastUsedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_used_at']));
                unset($data['last_used_at']);
            }
            elseif (\array_key_exists('last_used_at', $data) && $data['last_used_at'] === null) {
                $object->setLastUsedAt(null);
            }
            if (\array_key_exists('last_used_from_addr', $data)) {
                $object->setLastUsedFromAddr($data['last_used_from_addr']);
                unset($data['last_used_from_addr']);
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
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
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['created_by'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
            if ($object->isInitialized('lastUsedAt') && null !== $object->getLastUsedAt()) {
                $data['last_used_at'] = $object->getLastUsedAt()->format('Y-m-d\TH:i:sP');
            }
            $data['last_used_from_addr'] = $object->getLastUsedFromAddr();
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
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
            return [\Vendor\Library\Generated\Model\OrgApiKeysListResponseItem::class => false];
        }
    }
} else {
    class OrgApiKeysListResponseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\OrgApiKeysListResponseItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\OrgApiKeysListResponseItem::class;
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
            $object = new \Vendor\Library\Generated\Model\OrgApiKeysListResponseItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('created_by', $data)) {
                $object->setCreatedBy($this->denormalizer->denormalize($data['created_by'], \Vendor\Library\Generated\Model\ApiKeyCreatorData::class, 'json', $context));
                unset($data['created_by']);
            }
            if (\array_key_exists('last_used_at', $data) && $data['last_used_at'] !== null) {
                $object->setLastUsedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_used_at']));
                unset($data['last_used_at']);
            }
            elseif (\array_key_exists('last_used_at', $data) && $data['last_used_at'] === null) {
                $object->setLastUsedAt(null);
            }
            if (\array_key_exists('last_used_from_addr', $data)) {
                $object->setLastUsedFromAddr($data['last_used_from_addr']);
                unset($data['last_used_from_addr']);
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
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
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['created_by'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
            if ($object->isInitialized('lastUsedAt') && null !== $object->getLastUsedAt()) {
                $data['last_used_at'] = $object->getLastUsedAt()->format('Y-m-d\TH:i:sP');
            }
            $data['last_used_from_addr'] = $object->getLastUsedFromAddr();
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
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
            return [\Vendor\Library\Generated\Model\OrgApiKeysListResponseItem::class => false];
        }
    }
}