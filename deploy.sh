#!/bin/bash

[[ $TRAVIS_PULL_REQUEST == 'false' && $TRAVIS_BRANCH == 'master' ]] && curl -X POST $FORGE_DEPLOYMENT_TRIGGER_URL
