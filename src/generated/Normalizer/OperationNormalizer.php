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
    class OperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\Operation::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\Operation::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\Operation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            }
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('endpoint_id', $data)) {
                $object->setEndpointId($data['endpoint_id']);
                unset($data['endpoint_id']);
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($data['action']);
                unset($data['action']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
                unset($data['error']);
            }
            if (\array_key_exists('failures_count', $data)) {
                $object->setFailuresCount($data['failures_count']);
                unset($data['failures_count']);
            }
            if (\array_key_exists('retry_at', $data)) {
                $object->setRetryAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['retry_at']));
                unset($data['retry_at']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('total_duration_ms', $data)) {
                $object->setTotalDurationMs($data['total_duration_ms']);
                unset($data['total_duration_ms']);
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
            $data['project_id'] = $object->getProjectId();
            if ($object->isInitialized('branchId') && null !== $object->getBranchId()) {
                $data['branch_id'] = $object->getBranchId();
            }
            if ($object->isInitialized('endpointId') && null !== $object->getEndpointId()) {
                $data['endpoint_id'] = $object->getEndpointId();
            }
            $data['action'] = $object->getAction();
            $data['status'] = $object->getStatus();
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            $data['failures_count'] = $object->getFailuresCount();
            if ($object->isInitialized('retryAt') && null !== $object->getRetryAt()) {
                $data['retry_at'] = $object->getRetryAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            $data['total_duration_ms'] = $object->getTotalDurationMs();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\Operation::class => false];
        }
    }
} else {
    class OperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\Operation::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\Operation::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\Operation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            }
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('endpoint_id', $data)) {
                $object->setEndpointId($data['endpoint_id']);
                unset($data['endpoint_id']);
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($data['action']);
                unset($data['action']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
                unset($data['error']);
            }
            if (\array_key_exists('failures_count', $data)) {
                $object->setFailuresCount($data['failures_count']);
                unset($data['failures_count']);
            }
            if (\array_key_exists('retry_at', $data)) {
                $object->setRetryAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['retry_at']));
                unset($data['retry_at']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('total_duration_ms', $data)) {
                $object->setTotalDurationMs($data['total_duration_ms']);
                unset($data['total_duration_ms']);
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
            $data['project_id'] = $object->getProjectId();
            if ($object->isInitialized('branchId') && null !== $object->getBranchId()) {
                $data['branch_id'] = $object->getBranchId();
            }
            if ($object->isInitialized('endpointId') && null !== $object->getEndpointId()) {
                $data['endpoint_id'] = $object->getEndpointId();
            }
            $data['action'] = $object->getAction();
            $data['status'] = $object->getStatus();
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            $data['failures_count'] = $object->getFailuresCount();
            if ($object->isInitialized('retryAt') && null !== $object->getRetryAt()) {
                $data['retry_at'] = $object->getRetryAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            $data['total_duration_ms'] = $object->getTotalDurationMs();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\Operation::class => false];
        }
    }
}