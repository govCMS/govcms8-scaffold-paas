ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM govcms8lagoon/php

RUN rm -rf /app
COPY --from=cli /app /app
