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
    class SnapshotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Snapshot::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Snapshot::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Snapshot();
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
            if (\array_key_exists('lsn', $data)) {
                $object->setLsn($data['lsn']);
                unset($data['lsn']);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp($data['timestamp']);
                unset($data['timestamp']);
            }
            if (\array_key_exists('source_branch_id', $data)) {
                $object->setSourceBranchId($data['source_branch_id']);
                unset($data['source_branch_id']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('expires_at', $data)) {
                $object->setExpiresAt($data['expires_at']);
                unset($data['expires_at']);
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
            if ($object->isInitialized('lsn') && null !== $object->getLsn()) {
                $data['lsn'] = $object->getLsn();
            }
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('sourceBranchId') && null !== $object->getSourceBranchId()) {
                $data['source_branch_id'] = $object->getSourceBranchId();
            }
            $data['created_at'] = $object->getCreatedAt();
            if ($object->isInitialized('expiresAt') && null !== $object->getExpiresAt()) {
                $data['expires_at'] = $object->getExpiresAt();
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
            return [\Vendor\Library\Generated\Model\Snapshot::class => false];
        }
    }
} else {
    class SnapshotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Snapshot::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Snapshot::class;
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
            $object = new \Vendor\Library\Generated\Model\Snapshot();
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
            if (\array_key_exists('lsn', $data)) {
                $object->setLsn($data['lsn']);
                unset($data['lsn']);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp($data['timestamp']);
                unset($data['timestamp']);
            }
            if (\array_key_exists('source_branch_id', $data)) {
                $object->setSourceBranchId($data['source_branch_id']);
                unset($data['source_branch_id']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('expires_at', $data)) {
                $object->setExpiresAt($data['expires_at']);
                unset($data['expires_at']);
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
            if ($object->isInitialized('lsn') && null !== $object->getLsn()) {
                $data['lsn'] = $object->getLsn();
            }
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('sourceBranchId') && null !== $object->getSourceBranchId()) {
                $data['source_branch_id'] = $object->getSourceBranchId();
            }
            $data['created_at'] = $object->getCreatedAt();
            if ($object->isInitialized('expiresAt') && null !== $object->getExpiresAt()) {
                $data['expires_at'] = $object->getExpiresAt();
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
            return [\Vendor\Library\Generated\Model\Snapshot::class => false];
        }
    }
}