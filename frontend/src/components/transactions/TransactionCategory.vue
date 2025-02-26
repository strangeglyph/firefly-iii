<!--
  - TransactionCategory.vue
  - Copyright (c) 2021 james@firefly-iii.org
  -
  - This file is part of Firefly III (https://github.com/firefly-iii).
  -
  - This program is free software: you can redistribute it and/or modify
  - it under the terms of the GNU Affero General Public License as
  - published by the Free Software Foundation, either version 3 of the
  - License, or (at your option) any later version.
  -
  - This program is distributed in the hope that it will be useful,
  - but WITHOUT ANY WARRANTY; without even the implied warranty of
  - MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  - GNU Affero General Public License for more details.
  -
  - You should have received a copy of the GNU Affero General Public License
  - along with this program.  If not, see <https://www.gnu.org/licenses/>.
  -->

<template>
  <div class="form-group">
    <div class="text-xs d-none d-lg-block d-xl-block">
      {{ $t('firefly.category') }}
    </div>

    <vue-typeahead-bootstrap
        v-model="category"
        :data="categories"
        :inputClass="errors.length > 0 ? 'is-invalid' : ''"
        :minMatchingChars="3"
        :placeholder="$t('firefly.category')"
        :serializer="item => item.name"
        :showOnFocus=true
        inputName="category[]"
        @hit="selectedCategory = $event"
        @input="lookupCategory"
        ref="input"
    >
      <template slot="append">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" tabindex="-1" type="button" v-on:click="clearCategory"><span class="far fa-trash-alt"></span></button>
        </div>
      </template>
    </vue-typeahead-bootstrap>
    <span v-if="errors.length > 0">
      <span v-for="error in errors" class="text-danger small">{{ error }}<br/></span>
    </span>
  </div>
</template>

<script>

import VueTypeaheadBootstrap from 'vue-typeahead-bootstrap';
import {debounce} from "lodash";

export default {
  props: ['value', 'index', 'errors'],
  components: {VueTypeaheadBootstrap},
  name: "TransactionCategory",
  data() {
    return {
      categories: [],
      initialSet: [],
      category: this.value
    }
  },
  mounted: function () {
    this.$nextTick(function () {
      this.$refs.input.$refs.input.tabIndex = 10;
    })
  },
  created() {
    //console.log('Created category(' + this.index + ') "' + this.value + '"');
    // initial list of accounts:
    axios.get(this.getACURL(''))
        .then(response => {
          this.categories = response.data;
          this.initialSet = response.data;
        });
  },

  methods: {
    clearCategory: function () {
      this.category = '';
    },
    getACURL: function (query) {
      // update autocomplete URL:
      // console.log('getACURL("' + query + '")');
      return document.getElementsByTagName('base')[0].href + 'api/v1/autocomplete/categories?query=' + query;
    },
    lookupCategory: debounce(function () {
      // update autocomplete URL:
      //console.log('Do a search for "'+this.category+'"');
      axios.get(this.getACURL(this.category))
          .then(response => {
            this.categories = response.data;
          })
    }, 300)
  },
  watch: {
    value: function (value) {
      this.category = value ?? '';
    },
    category: function (value) {
      this.$emit('set-field', {field: 'category', index: this.index, value: value});
    }
  },
  computed: {
    selectedCategory: {
      get() {
        return this.categories[this.index].name;
      },
      set(value) {
        this.category = value.name;
      }
    }
  }
}
</script>