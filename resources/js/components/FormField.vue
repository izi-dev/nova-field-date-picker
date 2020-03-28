<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <date-picker
                v-model="value"
                :input-props="inputProps"
                :first-day-of-week="firstDayOfWeek"
                :masks="masks"
                @input="handleChange"
                :isDark="isDark"
                :locale="locale"
                :attributes="attributeCalendar"
                :isInline="isInline"
                :isRequired="isRequired"
                :min-date="minDate"
                :max-date="maxDate"
                :disabled-dates='disabledDates'
                :selectAttribute="selectAttribute"
                :color="color"
            />
        </template>
    </default-field>
</template>

<script>
    import {
        FormField,
        HandlesValidationErrors,
        InteractsWithDates,
    } from 'laravel-nova'

    import DatePicker from 'v-calendar/lib/components/date-picker.umd'

    export default {
        mixins: [HandlesValidationErrors, FormField, InteractsWithDates],

        components: {
            DatePicker
        },

        data() {
            return {
                inputProps: {},
                masks: {},
                isDark: false,
                locale: 'en',
                attributeCalendar: [],
                isInline: false,
                isRequired: false,
                minDate: null,
                maxDate: null,
                disabledDates: [],
                selectAttribute: {},
                color: null
            }
        },

        watch: {
            hasError(val) {
                let errorClass = val ? this.errorClasses.join() : null;
                this.inputProps.class = this.inputProps.class + errorClass;
            }
        },

        computed: {
            firstDayOfWeek() {
                return this.field.firstDayOfWeek || 0
            },

            placeholder() {
                return this.field.placeholder || moment().format(this.format)
            },

            format() {
                return this.field.format || 'YYYY-MM-DD'
            },

            pickerFormat() {
                return this.field.pickerFormat || 'Y-m-d'
            },
        },

        methods: {
            /*
             * Set the initial, internal value for the field.
             */
            setInitialValue() {
                this.value = this.field.value || null;

                if (this.value) {
                    this.value = new Date(moment(this.value).format());
                }

                this.fillPropsCalendar();

                this.fillAttributesCalendar();

                this.fillDisabledDates();

                this.fillSelectAttributesCalendar();
            },

            /**
             * Fill the given FormData object with the field's internal value.
             */
            fill(formData) {

                let date = this.value;

                if (date) {
                    date = moment(this.value).format(this.format);
                }

                formData.append(this.field.attribute, date || '');
            },

            /**
             * Update the field's internal value.
             */
            handleChange(value) {
                this.value = value;
            },

            /**
             * Fill props Calendar.
             */
            fillPropsCalendar() {
                this.inputProps = {
                    class: "w-full form-control form-input form-input-bordered ",
                    readonly: this.field.readonly,
                    placeholder: this.placeholder
                };

                this.masks = {
                    L: this.format
                };

                this.isDark = this.field.isDark;

                this.locale = this.field.locale;

                this.isInline = this.field.isInline;

                this.isRequired = this.field.required;

                if (this.field.minDate !== null) this.minDate = moment(this.field.minDate.date).format(this.format);

                if (this.field.maxDate !== null) this.maxDate = moment(this.field.maxDate.date).format(this.format);

                this.color = this.field.color;
            },

            /**
             * Fill disabled dates
             */
            fillDisabledDates() {
                if (this.field.disabled != null) {
                    this.field.disabled.map(data => {
                        let date = data;

                        if ('date' in data) {
                            date = moment(data.date).format(this.format);
                        }

                        this.disabledDates.push(date);
                    });
                }
            },

            /**
             * Fill attributes
             */
            fillAttributesCalendar() {
                if (this.field.attributeCalendar.length > 0) {
                    this.field.attributeCalendar.forEach(fieldAttr => {
                        let attr = this.getAttributeCalendar(fieldAttr);

                        this.attributeCalendar.push(attr);
                    });
                }
            },

            /**
             * Fill select attributes
             */
            fillSelectAttributesCalendar() {
                if (this.field.selectAttribute != null) {
                    let attr = this.getAttributeCalendar(this.field.selectAttribute);
                    this.selectAttribute = attr;
                }
            },

            /**
             * Get attributes
             */
            getAttributeCalendar(attribute) {
                let attr = {
                    key: attribute.key,
                    content: attribute.content,
                    order: attribute.order,
                };

                if (attribute.popover !== null) {
                    attr.popover = {
                        hideIndicator: attribute.popover.hideIndicator,
                        label: attribute.popover.label,
                        visibility: attribute.popover.visibility,
                    };
                }

                attr[attribute.typeName] = attribute.typeValue;

                if (attribute.dates != null) {
                    attr.dates = attribute.dates.map(dateField => {
                        return moment(dateField.date).format(this.format);
                    });
                }

                if (attribute.excludeDates != null) {
                    attr.excludeDates = attribute.excludeDates.map(dateField => {
                        return moment(dateField.date).format(this.format);
                    });
                }

                return attr;
            }
        },
    }
</script>
