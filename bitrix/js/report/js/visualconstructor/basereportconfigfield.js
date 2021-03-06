;(function(){
	"use strict";
	BX.namespace("BX.Report.VisualConstructor.Widget.ConfigField");
	BX.Report.VisualConstructor.Widget.ConfigField.Base = function(options)
	{
		BX.Report.VisualConstructor.Field.Base.apply(this, arguments);
		if (this.fieldScope)
		{
			this.form = BX.findParent(this.fieldScope, {
				tag: 'form'
			});
			this.reportsConfigurrationContainer = BX.findParent(this.fieldScope, {
				className: 'reports-configurations-container'
			});
			this.reportConfigurationsContainer = BX.findParent(this.fieldScope, {
				className: 'report-configuration-container'
			});
		}
	};

	BX.Report.VisualConstructor.Widget.ConfigField.Base.prototype = {
		__proto__: BX.Report.VisualConstructor.Field.Base.prototype,
		constructor: BX.Report.VisualConstructor.Widget.ConfigField.Base,
		findElementInRenderedElementsRepository: function(domElement)
		{
			return BX.Report.VisualConstructor.Widget.ConfigField.InitFieldRepository.getByDomElement(domElement);
		},
		getWidgetId: function()
		{
			return this.reportsConfigurrationContainer.getAttribute('data-widget-id');
		},
		getReportId: function()
		{
			return this.reportConfigurationsContainer.getAttribute('data-report-id');
		},
		getSelectedReportHandlerClassName: function()
		{
			return this.getReportConfigContainer().querySelector('select.report-handler-class-name').value;
		},
		getForm: function()
		{
			return this.form;
		},
		getWidgetReportsConfigContainer: function ()
		{
			return this.reportsConfigurrationContainer;
		},
		getReportConfigContainer: function ()
		{
			return this.reportConfigurationsContainer;
		}
	};




})();