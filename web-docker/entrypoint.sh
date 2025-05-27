#!/bin/sh

: "${KODBOX_HOST:=http://${HOST_IP}:52080}"
: "${DIFY_HOST:=http://${HOST_IP}}"
: "${DIFY_EVAL_API_KEY:=api-key}"
: "${DIFY_CHECK_API_KEY:=api-key}"
: "${DIFY_GEN_QA_API_KEY:=api-key}"
: "${DIFY_REGEN_QA_API_KEY:=api-key}"
: "${DIFY_WORKFLOW_URL:=${DIFY_HOST}/apps?tagIDs=${DIFY_OCR_WORKFLOW_TAG_ID}}"
: "${SUPABASE_HOST:=${HOST_IP}:8000}"
: "${SUPABASE_AUTH_HEADER:=Basic c3VwYWJhc2U6c3VwYWJhc2U=}"

envsubst '${KODBOX_HOST} ${DIFY_HOST} ${DIFY_EVAL_API_KEY} ${DIFY_CHECK_API_KEY} ${DIFY_GEN_QA_API_KEY} ${DIFY_REGEN_QA_API_KEY} ${DIFY_WORKFLOW_URL} ${SUPABASE_HOST} ${SUPABASE_AUTH_HEADER}' \
  < /usr/share/nginx/html/env.js.template > /usr/share/nginx/html/env.js

nginx -g "daemon off;"
