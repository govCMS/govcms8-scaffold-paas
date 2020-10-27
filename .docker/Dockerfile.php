##
# @see  https://govcms.gov.au/wiki-advanced#docker
#

ARG CLI_IMAGE
ARG GOVCMS_IMAGE_VERSION=8.9.6.1

FROM ${CLI_IMAGE} as cli
FROM govcms8lagoon/php:${GOVCMS_IMAGE_VERSION}

RUN rm -rf /app
COPY --from=cli /app /app
