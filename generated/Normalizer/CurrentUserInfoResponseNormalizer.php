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
    class CurrentUserInfoResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\CurrentUserInfoResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\CurrentUserInfoResponse::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\CurrentUserInfoResponse();
            if (\array_key_exists('max_autoscaling_limit', $data) && \is_int($data['max_autoscaling_limit'])) {
                $data['max_autoscaling_limit'] = (double) $data['max_autoscaling_limit'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active_seconds_limit', $data)) {
                $object->setActiveSecondsLimit($data['active_seconds_limit']);
                unset($data['active_seconds_limit']);
            }
            if (\array_key_exists('billing_account', $data)) {
                $object->setBillingAccount($this->denormalizer->denormalize($data['billing_account'], \Vendor\Library\Generated\Model\BillingAccount::class, 'json', $context));
                unset($data['billing_account']);
            }
            if (\array_key_exists('auth_accounts', $data)) {
                $values = [];
                foreach ($data['auth_accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\CurrentUserAuthAccount::class, 'json', $context);
                }
                $object->setAuthAccounts($values);
                unset($data['auth_accounts']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
                unset($data['email']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('image', $data)) {
                $object->setImage($data['image']);
                unset($data['image']);
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('last_name', $data)) {
                $object->setLastName($data['last_name']);
                unset($data['last_name']);
            }
            if (\array_key_exists('projects_limit', $data)) {
                $object->setProjectsLimit($data['projects_limit']);
                unset($data['projects_limit']);
            }
            if (\array_key_exists('branches_limit', $data)) {
                $object->setBranchesLimit($data['branches_limit']);
                unset($data['branches_limit']);
            }
            if (\array_key_exists('max_autoscaling_limit', $data)) {
                $object->setMaxAutoscalingLimit($data['max_autoscaling_limit']);
                unset($data['max_autoscaling_limit']);
            }
            if (\array_key_exists('compute_seconds_limit', $data)) {
                $object->setComputeSecondsLimit($data['compute_seconds_limit']);
                unset($data['compute_seconds_limit']);
            }
            if (\array_key_exists('plan', $data)) {
                $object->setPlan($data['plan']);
                unset($data['plan']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['active_seconds_limit'] = $object->getActiveSecondsLimit();
            $data['billing_account'] = $this->normalizer->normalize($object->getBillingAccount(), 'json', $context);
            $values = [];
            foreach ($object->getAuthAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['auth_accounts'] = $values;
            $data['email'] = $object->getEmail();
            $data['id'] = $object->getId();
            $data['image'] = $object->getImage();
            $data['login'] = $object->getLogin();
            $data['name'] = $object->getName();
            $data['last_name'] = $object->getLastName();
            $data['projects_limit'] = $object->getProjectsLimit();
            $data['branches_limit'] = $object->getBranchesLimit();
            $data['max_autoscaling_limit'] = $object->getMaxAutoscalingLimit();
            if ($object->isInitialized('computeSecondsLimit') && null !== $object->getComputeSecondsLimit()) {
                $data['compute_seconds_limit'] = $object->getComputeSecondsLimit();
            }
            $data['plan'] = $object->getPlan();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\CurrentUserInfoResponse::class => false];
        }
    }
} else {
    class CurrentUserInfoResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\CurrentUserInfoResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\CurrentUserInfoResponse::class;
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
            $object = new \Vendor\Library\Generated\Model\CurrentUserInfoResponse();
            if (\array_key_exists('max_autoscaling_limit', $data) && \is_int($data['max_autoscaling_limit'])) {
                $data['max_autoscaling_limit'] = (double) $data['max_autoscaling_limit'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active_seconds_limit', $data)) {
                $object->setActiveSecondsLimit($data['active_seconds_limit']);
                unset($data['active_seconds_limit']);
            }
            if (\array_key_exists('billing_account', $data)) {
                $object->setBillingAccount($this->denormalizer->denormalize($data['billing_account'], \Vendor\Library\Generated\Model\BillingAccount::class, 'json', $context));
                unset($data['billing_account']);
            }
            if (\array_key_exists('auth_accounts', $data)) {
                $values = [];
                foreach ($data['auth_accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\CurrentUserAuthAccount::class, 'json', $context);
                }
                $object->setAuthAccounts($values);
                unset($data['auth_accounts']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
                unset($data['email']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('image', $data)) {
                $object->setImage($data['image']);
                unset($data['image']);
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('last_name', $data)) {
                $object->setLastName($data['last_name']);
                unset($data['last_name']);
            }
            if (\array_key_exists('projects_limit', $data)) {
                $object->setProjectsLimit($data['projects_limit']);
                unset($data['projects_limit']);
            }
            if (\array_key_exists('branches_limit', $data)) {
                $object->setBranchesLimit($data['branches_limit']);
                unset($data['branches_limit']);
            }
            if (\array_key_exists('max_autoscaling_limit', $data)) {
                $object->setMaxAutoscalingLimit($data['max_autoscaling_limit']);
                unset($data['max_autoscaling_limit']);
            }
            if (\array_key_exists('compute_seconds_limit', $data)) {
                $object->setComputeSecondsLimit($data['compute_seconds_limit']);
                unset($data['compute_seconds_limit']);
            }
            if (\array_key_exists('plan', $data)) {
                $object->setPlan($data['plan']);
                unset($data['plan']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            $data['active_seconds_limit'] = $object->getActiveSecondsLimit();
            $data['billing_account'] = $this->normalizer->normalize($object->getBillingAccount(), 'json', $context);
            $values = [];
            foreach ($object->getAuthAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['auth_accounts'] = $values;
            $data['email'] = $object->getEmail();
            $data['id'] = $object->getId();
            $data['image'] = $object->getImage();
            $data['login'] = $object->getLogin();
            $data['name'] = $object->getName();
            $data['last_name'] = $object->getLastName();
            $data['projects_limit'] = $object->getProjectsLimit();
            $data['branches_limit'] = $object->getBranchesLimit();
            $data['max_autoscaling_limit'] = $object->getMaxAutoscalingLimit();
            if ($object->isInitialized('computeSecondsLimit') && null !== $object->getComputeSecondsLimit()) {
                $data['compute_seconds_limit'] = $object->getComputeSecondsLimit();
            }
            $data['plan'] = $object->getPlan();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\CurrentUserInfoResponse::class => false];
        }
    }
}